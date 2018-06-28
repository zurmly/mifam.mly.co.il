<?php /* Template Name: Add new project old */ ?>

<?php get_header(); ?>
<?php 
if($_POST["action"] == "newProject"){
 include $_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/digital_israel/API/insertPost.php';
}
?>

    <!-- Page Content -->
    <div class="container">

       <form method="POST" id="addProject">
    <?php 
      // https://developer.wordpress.org/rest-api/using-the-rest-api/authentication/
      wp_nonce_field( 'wp_rest' ); 
    ?>

      <div class="form-group">
        <label for="project_name">project_name:</label>
        <input type="text" class="form-control" id="project_name"  value=""  name="title">
      </div>  

       <div class="form-group">
        <label for="local_authority">local_authority:</label>
        <input type="text" class="form-control" id="local_authority" value="<?=the_field('local_authority')?>" name="fields[local_authority]">
      </div>

       <div class="form-group">
          <label for="type_of">type_of:</label>
              <select multiple class="form-control" id="type_of" name="fields[type_of]">
     <?php get_select_val("type_of"); ?>
         </select>
      </div>

       <div class="form-group">
          <label for="system_type_">system_type_:</label>
              <select multiple class="form-control" id="system_type_" name="fields[system_type_]">
     <?php get_select_val('system_type_'); ?>
         </select>
      </div>

       <div class="form-group">
            <div class="checkbox">
          <label><input id="project_designation" class="form-control" type="checkbox" name="fields[project_designation]">ייעוש הפרוייקט</label>
        </div>
      </div> 

       <div class="form-group">
        <label for="start_date">start_date:</label>
        <input type="text" class="form-control" id="start_date" name="fields[start_date]" value="<?=the_field('start_date')?>">
      </div>

       <div class="form-group">
        <label for="start_end">start_end:</label>
        <input type="text" class="form-control" id="start_end" name="fields[start_end]" value="<?=the_field('start_end')?>">
      </div>

       <div class="form-group">
          <label for="size_of_authority">size_of_authority:</label>
              <select multiple class="form-control" id="size_of_authority" name="fields[size_of_authority]">
     <?php get_select_val('size_of_authority'); ?>
         </select>
      </div>

       <div class="form-group">
          <label for="project_status">project_status:</label>
              <select multiple class="form-control" id="project_status" name="fields[project_status]">
     <?php get_select_val('project_status'); ?>
         </select>
      </div>

       <div class="form-group">
          <label for="project_cost">project_cost:</label>
              <select multiple class="form-control" id="project_cost" name="fields[project_cost]">
     <?php get_select_val('project_cost'); ?>
         </select>
      </div>


      <div class="form-group">
        <label for="supplier_name">supplier_name:</label>
        <input type="text" class="form-control" id="supplier_name" value="<?=the_field('supplier_name')?>"  name="fields[supplier_name]">
      </div>

      <div class="form-group">
    <label for="explanation">explanation:</label>
    <textarea id="explanation" class="form-control" name="fields[explanation]"> <?=the_field('explanation')?> </textarea>
      </div>

      <div class="form-group">
    <label for="points_for_improvement">points_for_improvement:</label>
    <textarea id="points_for_improvement" class="form-control" name="fields[points_for_improvement]"> <?=the_field('points_for_improvement')?> </textarea>
      </div>

      <div class="form-group">
    <label for="points_for_preservation">points_for_preservation:</label>
    <textarea id="points_for_preservation" class="form-control"  name="fields[points_for_preservation]"> <?=the_field('points_for_preservation')?> </textarea>
      </div>

      <button type="submit" class="btn btn-default">שלח</button>
  </form> 


  <?php 
  //the_field('type_of');
  // echo "<Br>";
  // the_field('start_date');
  // var_dump(get_field('points_for_improvement'));
  ?>


    </div>
    <!-- /.container -->

<script>

$( document ).ready(function() { 

    var postForm = $( '#addProject' ); 

    postForm.on( 'submit', function( e ) {
          e.preventDefault(); 
          $.ajax({
               url: magicalData.siteURL +'/wp-json/wp/v2/projects?title='+$('#project_name').val()+'&status=publish',
               method: 'POST',
               crossDomain: true,
               contentType: 'application/json',
               beforeSend: function ( xhr ) {
                      xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
               },
               success: function( data ) {
                   console.log( 'newPostSuccess',data );
                   updateNewProject(data.id);
               },
               error: function( error ) {
                   console.log( 'newPostError',error );
               }
          });

          function updateNewProject(projectID){
              var postForm = $( '#addProject' ); 
              // var postForm  = $( this );
              var url    = magicalData.siteURL +'/wp-json/wp/v2/projects/'+projectID;
              var method = postForm.attr( 'method' );
              var data   = postForm.serializeArray();
              console.log('updateNewProjectData',data);
              
              $.ajax( {
                  url: url,
                  method: method,
                  beforeSend: function ( xhr ) {
                      xhr.setRequestHeader( 'X-WP-Nonce', magicalData.nonce );
                  },
                  data: data,
                  dataType: 'json',
                  success: function( data ) {
                        alert('success postID : ' + projectID);
                        console.log( 'updateNewProjectSuccess',data );
                    },
                  error: function( error ) {
                        console.log( 'updateNewProjectError', error );
                    }
              } )
          }
    });

});


</script>

  </body>

<?php 
get_footer();
 ?>
