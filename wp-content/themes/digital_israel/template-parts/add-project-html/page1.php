<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <input v-model="title" class="form-control" type="text" placeholder="שם הפרויקט"  v-on:blur="isRequired" />
      <div class="alert alert-danger" v-show="RequiredFieldStatus">
        <strong>{{RequiredField}}</strong> {{RequiredMessage}}
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
     <div class="form-group">
        <label for="local_authority">שם הרשות</label>
            <div class="select-box" @click="isRequiredSelect">
              <select  multiple class="form-control selectpicker" id="local_authority" v-model="local_authority"  >
              <?php get_select_val("local_authority"); ?>
             </select>
           </div>
      <div class="alert alert-danger" v-show="RequiredFieldSelectStatus">
        <strong>{{RequiredField}}</strong> {{RequiredMessage}}
      </div>
    </div>
  </div>

  <div class="col-md-6">
     <div class="form-group">
        <label for="type_of">תחום</label>
            <select multiple class="form-control selectpicker" id="type_of"  v-model="type_of"  >
            <?php get_select_val("type_of"); ?>
             </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
     <div class="form-group">
        <label for="system_type_">
        סוג המערכת‏‏‏‏‏‏‏‏‏‏
        </label>
            <select multiple class="form-control selectpicker" id="system_type_" v-model="system_type_">
            <?php get_select_val("system_type_"); ?>
       </select>
    </div>
  </div>

  <div class="col-md-6">
     <div class="form-group">
        <label for="project_designation">
        ייעוד הפרויקט‏‏‏‏‏‏‏‏‏‏
        </label>
        <!-- <input id="project_designation" class="form-control" type="checkbox" name="fields[project_designation]">‏‏‏‏‏‏‏‏‏‏ -->
                  <div class="row">
                      <div class="col-md-6" style=" padding-left: 0; ">
                            <div class="project-designation" @click="projectDesignation('A')">
                                <div class=".addProject-icon-img">
                                  <img src="<?php echo  get_template_directory_uri()."/images/s1.jpg"; ?>">
                                </div>
                                <div class="addProject-icon-labe">
                                  <b>פנים<br>רשותי</b>
                                </div>
                            </div>
                      </div>
                      <div class="col-md-6" style=" padding-right: 0; ">
                            <div class="project-designation" @click="projectDesignation('B')">
                              <div class=".addProject-icon-img">
                                <img src="<?php echo  get_template_directory_uri()."/images/icon12.jpg"; ?>">
                              </div>
                              <div class="addProject-icon-labe">
                                <b>לתושב<br>שירות</b>
                              </div>
                            </div>
                      </div>
                  </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
 ‎‎‎‎‎‎‎‎‎‎     <label for="project_status">
      סטטוס פרויקט
‎      </label>
      <div class="project-status-box">
          <div class="project-status-line"></div>
          <ul id="project-status-list">
            <li>
                <div class="list-circle" @click="projectStatus('A')"></div> 
                <div class="list-title">
                        ייזום
                </div> 
            </li>
            <li>
                <div class="list-circle" @click="projectStatus('B')"></div> 
                <div class="list-title">
                       אפיון
                </div> 
            </li>        
            <li>
                <div class="list-circle"  @click="projectStatus('C')"></div> 
                <div class="list-title">
                  התקשרות עם ספק
                </div> 
            </li> 
            <li>
                <div class="list-circle" @click="projectStatus('D')"></div> 
                <div class="list-title">
                    פיתוח
                </div> 
            </li>
            <li>
                <div class="list-circle" @click="projectStatus('E')"></div> 
                <div class="list-title">
                הטמעה
                </div> 
            </li>
            <li>
                <div class="list-circle" @click="projectStatus('F')"></div> 
                <div class="list-title">
                סיום 
                </div> 
            </li>
          </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">       
  <div class="col-md-6">
      <div class="row">
          <div class="col-md-4" style=" padding-left: 0;">
              <label for="start_date">
              ‏‏‏‏‏‏‏‏‏‏תחילת פרויקט
              </label>
          </div>
          <div class="col-md-8 no-padding">
                  <input type="text" class="form-control datepicker" id="start_date" value="" v-model="start_date">‏‏‏‏‏‏‏‏‏‏
                  <div class="datepicker-icon"></div>
          </div>
      </div>
  </div>

  <div class="col-md-6">
      <div class="row">
          <div class="col-md-4" style=" padding-left: 0;">
              <label for="end_date">
            סיום פרויקט
              </label>
          </div>
          <div class="col-md-8 no-padding">
                  <input type="text" class="form-control datepicker" id="end_date" v-model="end_date">‏‏‏‏‏‏‏‏‏‏
                  <div class="datepicker-icon"></div>
          </div>
      </div>
    </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="form-group">
       ‎‎‎‎‎‎‎‎‎‎     <label for="size_of_authority">
          ‎ מתאים לגודל רשות (ניתן לבחור יותר מגודל רשות אחת)
      ‎      </label>
<!--             <select multiple class="form-control selectpicker" id="size_of_authority" name="fields[size_of_authority]">
               <?php //get_select_val('size_of_authority'); ?>
            </select> -->   
            <div id="size-of-authority">
              <div class="row">
                  <div class="col-md-4">
                        <div class="size-of-authority" @click="sizeOfAuthority('A')">
                            <div class=".addProject-icon-img">
                              <img src="<?php echo  get_template_directory_uri()."/images/s1.jpg"; ?>">
                            </div>
                            <div class="addProject-icon-labe">
                              <b>גדולה</b><br>
                              350+<br>
                              תושבים
                            </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="size-of-authority" @click="sizeOfAuthority('B')">
                          <div class=".addProject-icon-img">
                            <img src="<?php echo  get_template_directory_uri()."/images/s1.jpg"; ?>">
                          </div>
                          <div class="addProject-icon-labe">
                            <b>גדולה</b><br>
                            350+<br>
                            תושבים
                          </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                      <div class="size-of-authority" @click="sizeOfAuthority('C')">
                          <div class=".addProject-icon-img">
                            <img src="<?php echo  get_template_directory_uri()."/images/s1.jpg"; ?>">
                          </div>
                          <div class="addProject-icon-labe">
                            <b>גדולה</b><br>
                            350+<br>
                            תושבים
                          </div>                
                        </div>
                  </div>
              </div>
            </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
     <div class="form-group">
        <label for="project_cost">
        עלות הפרויקט (הערכה)‏‏‏‏‏‏‏‏‏‏ ‏‏‏‏
        </label>
            <select multiple class="form-control selectpicker" id="project_cost" name="fields[project_cost]">
            <?php get_select_val("project_cost"); ?>
       </select>
    </div>
  </div>

  <div class="col-md-6">
     <div class="form-group">
        <input class="form-control" v-model="supplier_name" type="text" placeholder="שם הספק"  style=" margin-top: 26px; "/>
    </div>
  </div>
</div>

<div class="row" style=" margin-top: 50px; ">
  <div class="col-md-12">
    <div  class="btu-next">אוקי, בואו נתקדם</div>
  </div>
</div>