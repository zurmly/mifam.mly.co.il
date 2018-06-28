<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package digital_israel
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation();

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<form action="#" method="POST" id="newProject">
	<input type="text" name="title" value="ggggg">
	  <button type="submit" class="btn btn-default">שלח</button>
</form>

<script>
	var postForm = $( '#newProject' );
 
var jsonData = function( form ) {
    var arrData = form.serializeArray(),
        objData = {};
     
    $.each( arrData, function( index, elem ) {
        objData[elem.name] = elem.value;
    });
     
    return JSON.stringify( objData );
};
 
postForm.on( 'submit', function( e ) {
    e.preventDefault();
     
    $.ajax({
        url: 'http://digitalisraelmly.org/wp-json/wp/v2/posts/',
        method: 'POST',
        data: jsonData( postForm ),
        crossDomain: true,
        contentType: 'application/json',
        beforeSend: function ( xhr ) {
            xhr.setRequestHeader( 'Authorization', 'Basic bWx5OiFkaWdpdGFsLWlzcmFlbCQ=' );
        },
        success: function( data ) {
            console.log( data );
        },
        error: function( error ) {
            console.log( error );
        }
    });
});

</script>
<?php

// $headers = array (
// 	'Authorization' => 'Basic ' . base64_encode( 'mly' . ':' . '!digital-israel$' ),
// );
// $url = rest_url( 'wp/v2/posts' );

// $data = array(
// 	'title' => 'Hello Gaiawwww' 
// );

// $response = wp_remote_post( $url, array (
//     'method'  => 'POST',
//     'headers' => $headers,
//     'body'    =>  $data
// ) );

// +kint::dump($response);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://digitalisraelmly.org/wp-json/wp/v2/posts/",
  // CURLOPT_URL => "http://digital-israel.org/wp-json/acf/v3/posts/18",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"title\"\r\n\r\nnew66\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "authorization: Basic bWx5OiFkaWdpdGFsLWlzcmFlbCQ=",
    "cache-control: no-cache",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
    "postman-token: 01f42dd8-47c8-727b-6e19-0dd5935db622"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

get_sidebar();
get_footer();
