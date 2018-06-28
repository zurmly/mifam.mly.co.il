   <?php /* Template Name: Add Post Ajax */ ?>

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

			  <button type="submit" id="quick-add-button">Save</button>
			</form>

<script>


$( document ).ready(function() { 


     $.ajax({
         url: magicalData.siteURL +'/wp-json/newproject/v1/project/123',
         method: 'POST',
         crossDomain: true,
         contentType: 'application/json',
         data: JSON.stringify({ttt:"tttt",aaa: "aaaa"}),
         beforeSend: function ( xhr ) {
                xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
         },
         success: function( data ) {
             console.log( data.responseText );
         },
         error: function( error ) {
             console.log( error.responseText );
         }
     });
});
	
// Quick Add Post AJAX
var quickAddButton = document.querySelector("#quick-add-button");

if (quickAddButton) {

  quickAddButton.addEventListener("click", function() {
    var ourPostData = {
      "title": document.querySelector('.admin-quick-add [name="title"]').value,
      "content": document.querySelector('.admin-quick-add [name="content"]').value,
      "status": "publish"
    }

    var createPost = new XMLHttpRequest();
    createPost.open("POST", magicalData.siteURL + "/wp-json/wp/v2/posts");
    createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce);
    createPost.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    createPost.send(JSON.stringify(ourPostData));
    createPost.onreadystatechange = function() {
      if (createPost.readyState == 4) {
        if (createPost.status == 201) {
          document.querySelector('.admin-quick-add [name="title"]').value = '';
          document.querySelector('.admin-quick-add [name="content"]').value = '';
        } else {
          alert("Error - try again.");
        }
      }
    }
  });
}


</script>


<?php 
get_footer();




