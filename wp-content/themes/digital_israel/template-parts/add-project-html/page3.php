<!-- https://serversideup.net/uploading-files-vuejs-axios/ -->
<div class="row">       
  <div class="col-md-12">
        <b> הוסף צילומי מסכים מתוך הפרויקט.</b>
        <br>
        <p>שימו לב! ניתן להעלות עד 15% מתוך כלל מסכי הפרויקט </p>
        <br>  
        <br>  
        <br> 
        <img src="<?php echo  get_template_directory_uri()."/images/up.jpg"; ?>" class="up-screenshots-btu"    />
        <span style="color:#19badf!important">הוסף צילום מסך</span>

        <div class="row screenshots-box" style="display:none">  
          <div>         
          <div class="col-md-8">
                  <input type="text" class="form-control" name="screenshots-name" placeholder="שם המסך">  
          </div>
          <div class="col-md-4">
                  <input type="file" name="fileToUpload" id="fileToUpload" style="display: none">          
                  <img src="<?php echo  get_template_directory_uri()."/images/saveFile.jpg"; ?>" class=""    />
          </div>
          <div class="col-md-12" style=" margin: 30px 0; ">
              <input type="submit" value="שמור"  class="addProject-btu">
          </div>
          </div>
        </div>    

  </div>
</div>

<div class="row" style="margin-top: 60px ">       
  <div class="col-md-12">
      <b>הוסף קבצים ששימשו אתכם במהלך הפרויקט </b>
      <br>  
      <br>  
      <br>  
      <img src="<?php echo  get_template_directory_uri()."/images/up.jpg"; ?>" class="up-file-btu"    />
      <span style="color:#19badf!important">הוסף קובץ</span>

        <div class="row files-box" style="display:none">  
          <div>         
          <div class="col-md-8">
                  <input type="text" class="form-control" name="files-name" placeholder="שם המסך">  
          </div>
          <div class="col-md-4">
                  <input type="file" name="fileToUpload" id="fileToUpload" style="display: none">          
                  <img src="<?php echo  get_template_directory_uri()."/images/saveFile.jpg"; ?>" class=""    />
          </div>
          <div class="col-md-12" style=" margin: 30px 0; ">
              <input type="submit" value="שמור"  class="addProject-btu">
          </div>
          </div>
        </div> 
  </div>
</div>




<div class="row"  style=" margin-top: 50px; ">
  <div class="col-md-6">
    <div  class="btu-prev">לשלב הקודם</div>
  </div>
  <div class="col-md-6">
    <div  class="btu-next">המשך</div>
  </div>  
</div>