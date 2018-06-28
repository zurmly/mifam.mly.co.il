<?php /* Template Name: Add Post Type */ ?>

<?php 
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<form action="#" method="POST" class="admin-quick-add">
			  <?php 
			    wp_nonce_field( 'wp_rest' ); 
			  ?>
			  <label>title: <input type="text" name="title" id=""></label>
			  <label>content: <input type="text" name="content" id=""></label>

			  <button type="submit" id="quick-add-button">get post type</button>
			</form>

<script>
$( document ).ready(function() {




      var data = {
          'fields[supplier_name]': 'tttttt'
      };
      var data = '';
      // Fire the AJAX request!
      $.ajax({
          method: 'POST',
          url: magicalData.siteURL + '/wp-json/acf/v3/posts/27?fields[supplier_name]=test22',
          data: data,
          beforeSend: function ( xhr ) {
                xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

            },
          success : function( response ) {
            console.log(response)
            $( '#result' ).html(response.data.message);
          },
          fail : function( response ) {
            console.log(response)
            $( '#result' ).html(response.data.message);
          }

          
      });


    //     var ourPostData = {
    //       "fields[supplier_name]": "testtttttt"
    //     }


    // var createPost = new XMLHttpRequest();
    // createPost.open("POST", magicalData.siteURL + "/wp-json/acf/v3/posts/27");
    // createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce);
    // createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    // createPost.send(JSON.stringify(ourPostData));
    // debugger;
    // createPost.onreadystatechange = function() {
    //   if (createPost.readyState == 4) {
    //     if (createPost.status == 201) {
    //         alert('ok')
    //     } else {
    //       alert("Error - try again.");
    //     }
    //   }
    // }












        // var t = $.ajax( {
        //     url: magicalData.siteURL + '/wp-json/acf/v3/posts/27',
        //     method: 'POST',
        //     beforeSend: function ( xhr ) {
        //         xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
        //         xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

        //     },
        //     data: data,
        //     dataType: 'json',
        // } ).always( function ( data ) {
        //     console.log(data);

        // } );



 } );



</script>


<?php 
get_footer();




