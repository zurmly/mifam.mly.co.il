
<div class="row">       
  <div class="col-md-12">
  	<p style="color: #19badf;">נשמח אם תבדוק את הפרטים שהזנת, אם תרצו לתקן תוכלו לחזור לכל אחד מהשלבים הקודמים. </p>
  </div>
</div>

<div class="row">       
  <div class="col-md-12">
  	<div class="field-name">שם הפרויקט:</div>
  </div>
  <div class="col-md-12">
  	<div class="field-val">{{title}}</div>
  </div>
</div>

<div class="row form-result"  style="margin-top: 50px; border-bottom: 1px solid #eaeaea; padding-bottom: 50px;">

		<div class="divTable">
		<div class="divTableBody">
			<div class="divTableRow">
				<div class="divTableCell">
					<span style="color: #19badf;">שם הרשות:</span> {{local_authority}}
				</div>
				<div class="divTableCell">
					<span style="color: #19badf;">תחום רשותי:</span> {{type_of}}				
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">
					<span style="color: #19badf;">ייעוד הפרויקט:</span> {{project_designation}}
				</div>
				<div class="divTableCell">
					<span style="color: #19badf;">סוג מערכת:</span> {{system_type_}}				
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">
					<span style="color: #19badf;">תחילת פרויקט:</span> {{start_date}}
				</div>
				<div class="divTableCell">
					<span style="color: #19badf;">סיום פרויקט:</span> {{end_date}}				
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">
					<span style="color: #19badf;">מתאים לרשות:</span> {{size_of_authority}}
				</div>
				<div class="divTableCell">
					<span style="color: #19badf;">סטטוס פרויקט:</span> {{project_status}}				
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">
					<span style="color: #19badf;">שם הספק:</span> {{supplier_name}}
				</div>
				<div class="divTableCell">
					</div>
			</div>
		</div>
		</div>
</div>

<div class="row" style=" margin-top: 25px; ">       
  <div class="col-md-12">
  	<p style="color: #19badf;">רגע לפני סיום נשמח אם תתן טיפ מועיל למנהלי פרויקטים דומים</p>
  </div>
</div>

<div class="row" style=" margin-top: 25px; ">       
  	<p style="color: #19badf;">פרטי מנהל הפרויקט</p>
	<div class="row">
		<div class="form-group">
			  <div class="col-md-6">
			  	<input type="text" class="form-control" id="full_name" v-model="full_name" placeholder="שם מלא">‏‏‏‏‏‏‏‏‏‏
			  </div>
			  <div class="col-md-6">
	  			  	<input type="text" class="form-control" id="tel" v-model="tel" placeholder="טלפון">‏‏‏‏‏‏‏‏‏‏
			  </div>
		</div>
		<div class="form-group">
			  <div class="col-md-12">
			  	<input type="text" class="form-control" id="position" v-model="position" placeholder="תפקיד">‏‏‏‏‏‏‏‏‏‏
			  </div>
		</div>
		<div class="form-group">
			  <p style="color: #19badf;">הטיפ שלי</p>
			  <div class="col-md-8">
			  	<textarea v-model="tip"  class="form-control" id="tip"></textarea>
			  </div>
			  <div class="col-md-4">
			<input type="file" name="fileToUpload" id="fileToUpload" style="display: none">          
			<img src="<?php echo  get_template_directory_uri()."/images/saveFile.jpg"; ?>" class=""    />
			  </div>
		</div>
		<div class="col-md-12" style=" margin-top: 20px; ">
			<div class="form-group">
				<input type="checkbox" name="checkbox" value="check" id="agree" />אני מאשר/ת את תקנון המאגר
				<a href="#">תקנון</a>
			</div>	
		</div>
	</div>  
</div>




<div class="row"  style=" margin-top: 50px; ">
  <div class="col-md-6">
    <div  class="btu-prev">לשלב הקודם</div>
  </div>
  <div class="col-md-6">
  	<input type="submit" class="btu-submit" value="זהו סיימתי!">
  </div>  
</div>

