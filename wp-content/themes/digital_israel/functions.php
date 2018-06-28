<?php
session_start();
if(!isset($_SESSION['token'])){
  $_SESSION['token'] = md5(rand(1000,9999)); //you can use any encryption
  var_dump($_SESSION['token']);  
}
define('SITEURL', 'http://api-wp.mly.co.il');
define('THEMEURL', 'http://api-wp.mly.co.il/wp-content/themes/digital_israel');
require_once $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/digital_israel/kint-master/Kint.class.php';

/**********************************
1: Register routes For API
**********************************/
//http://api-wp.mly.co.il/wp-json/newproject/v1/project/123?
//https://wpshout.com/custom-register_rest_route-wordpress/
add_action( 'rest_api_init', 'wpshout_register_routes' ); 
function wpshout_register_routes() {
    register_rest_route( 
        'newproject/v1',
        '/project/(?P<id>\d+)',

      array(
        'methods' => 'GET, POST, PUT, PATCH',
        'callback'        => 'updateNewProject'
      )        
    );
}

function updateNewProject($request){
  $r = update_field('supplier_name','new',53);
  var_dump($request->get_param('ttt'));
  var_dump($request->get_params());
  exit;
}

//search post type
//http://api-wp.mly.co.il/wp-json/search_post_type/v1/search
//params:
//?to_search="מילת חיפושש"
add_action( 'rest_api_init', 'search_post_type' );
function search_post_type() {
    register_rest_route(
        'search_post_type/v1',
        '/search',

        array(
            'methods' => 'GET, POST, PUT, PATCH',
            'callback' => 'search_post_type_from_db',
        )
    );
}

function search_post_type_from_db($request){
    //var_dump($request->get_param('to_search'));
    $to_search = $request->get_param('to_search');
    //$query = "SELECT * FROM `wp_posts` WHERE `post_title` LIKE '%". $to_search  ."%' AND post_type = 'database' OR post_type = 'projects'";
    //$to_search = 'חיפוש1234';
    $query = "SELECT * FROM `wp_posts` WHERE `post_title` LIKE '%". $to_search  ."%' AND (post_type = 'database' OR post_type = 'projects' OR post_type = 'contacts')";
    global $wpdb;
    $results = $wpdb->get_results( $query, OBJECT );
    echo json_encode($results);
    exit;
}


function update_item(WP_REST_Request $request ) {
  $item = $this->prepare_item_for_database( $request );

  if ( function_exists( 'slug_some_function_to_update_item')  ) {
    $data = slug_some_function_to_update_item( $item );
    if ( is_array( $data ) ) {
      return new WP_REST_Response( $data, 200 );
    }
  }

  return new WP_Error( 'cant-update', __( 'message', 'text-domain'), array( 'status' => 500 ) );

}

/**********************************
2: From php to js var 
**********************************/
function js_var_resources() {
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, false);
  $r = wp_localize_script('main_js', 'magicalData', array(
    'nonce' => wp_create_nonce('wp_rest'),
    'siteURL' => get_site_url(),
    'userID' => get_current_user_id(),
    'token' => $_SESSION['token']
  ));
}
add_action('wp_enqueue_scripts', 'js_var_resources',2);

/**********************************
3: Theme scripts and css
**********************************/
function add_theme_scripts() {
 
  wp_enqueue_style( 'bootstrap_min', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'bootstrap_ui', get_template_directory_uri() . '/css/jquery-ui.css');
  //wp_enqueue_style( 'bulma_css', get_template_directory_uri() . '/css/bulma.min.css');

  wp_enqueue_script( 'jquery_min', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
  wp_enqueue_script( 'jquery_ui', get_template_directory_uri() . '/js/jquery-ui.min.js');
  wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script( 'scrolling_nav_min', get_template_directory_uri() . '/js/scrolling-nav.js');


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' ,1);

/**********************************
4: Bootstrap select scripts
**********************************/
function add_bootstrap_select_scripts() {
    wp_enqueue_style( 'bootstrap_select_css', get_template_directory_uri() . '/bootstrap-select/bootstrap-select.min.css');
  wp_enqueue_script( 'bootstrap_select_js', get_template_directory_uri() . '/bootstrap-select/bootstrap-select.min.js');

}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_select_scripts',3 );

/**********************************
5: Vue.js scripts
**********************************/
function add_vue_scripts() {
  wp_enqueue_script( 'vue_js', get_template_directory_uri() . '/js/vue/vue.js' );    

  // wp_enqueue_script( 'vue_resource', get_template_directory_uri() . '/js/vue/vue-resource.min.js' );  
  // wp_enqueue_script( 'vue_polyfill', get_template_directory_uri() . '/js/vue/polyfill.min.js' );    
  // wp_enqueue_script( 'vue_vee_validate', get_template_directory_uri() . '/js/vue/vee-validate.js' );    
  //wp_enqueue_script( 'vue_bootstrap', get_template_directory_uri() . '/js/vue/bootstrap-vue.js' );    
  //wp_enqueue_style( 'bootstrapVue_css', get_template_directory_uri() . '/js/vue/css/bootstrap-vue.css');
}
add_action( 'wp_enqueue_scripts', 'add_vue_scripts' ,4);

/**********************************
6: Theme style
**********************************/
function add_theme_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_style' ,5);

/*********************
7: ACF API enable
*********************/
// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );

/*********************
8: ACF get select valus
*********************/
function get_select_val($fieldName){
//27 Basic post for get fields
  $field = get_field_object($fieldName,27);
  $choices = $field['choices'];
  $selected_value = $field['value'];
  // var_dump($field);
  foreach ($choices as $value) {
    if($selected_value == $value){
      $selected = 'selected';
    }else{
      $selected = '';
    }
    echo "<option $selected>$value</option>";    
  }
}
 ?>