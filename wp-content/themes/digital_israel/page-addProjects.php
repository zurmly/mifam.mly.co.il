<?php /* Template Name: Add new project */ ?>

<?php get_header(); ?>

<!-- Page Content -->
<main>  


<div style="width: 100%;max-width: 570px;" class="container">
      <h4 class="text-center" style="color: #19badf;">
        היי אורטל, אנחנו שמחים שבחרת לשתף אותנו בפרויקט שלך. לאחר הוספת <br>הפרויקט תוכל להתעדכן בסטטוס הפרוייקט, לשנות ולערוך באיזור האישי
    </h4>
      <div class="l-box">
        <div class="circle-b-line"></div>
        <div class="circle-status">
          <div class="row">
            <div class="col-md-3">
              <span class="circle-title">פרטים כללים</span>
              <div id="circle-1" class="circle on">
                1
              </div>
            </div>
            <div class="col-md-3">
              <span class="circle-title">על הפרויקט
              </span>
              <div id="circle-2" class="circle">
                2
              </div>
            </div>
            <div class="col-md-3">
              <span class="circle-title">
                  מסכים וקבצים
              </span>
              <div id="circle-3" class="circle">
                3
              </div>
            </div>
            <div class="col-md-3">
              <span class="circle-title">
                סיום
              </span>
              <div id="circle-4" class="circle">
                4
              </div>
            </div>
          </div>
        </div>
        <form id="addProject" class="add-project-form"  v-on:submit.prevent="submitForm" action="" currentPage="1">
          
          <div id="form-page-1" class="form-page">  
            <?php  include $_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/digital_israel/template-parts/add-project-html/page1.php';?>
          </div><!--form-page-1-->   

          <div id="form-page-2" class="form-page" style="display:   none">  
            <?php  include $_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/digital_israel/template-parts/add-project-html/page2.php';?>
          </div><!--form-page-2-->   

          <div id="form-page-3" class="form-page" style="display:   none">  
            <?php  include $_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/digital_israel/template-parts/add-project-html/page3.php';?>
          </div><!--form-page-3--> 
          
          <div id="form-page-4" class="form-page" style="display:   none">  
            <?php  include $_SERVER["DOCUMENT_ROOT"].'/wp-content/themes/digital_israel/template-parts/add-project-html/page4.php';?>
          </div><!--form-page-4--> 
        </form>
      </div><!--l-box-->
</div><!--container-->

<script>
$( document ).ready(function() { 
    $('.circle').click(function(event){
  
      $( ".circle" ).removeClass( "on" );
      $( this ).addClass( "on" );
       var id = event.target.id; 
       var div = id.replace("circle", "form-page");
      $('.form-page').hide();
      $('#'+div+'').show();
      var page = id.replace("circle-", "");
      page = parseInt(page);
      $( "form" ).attr( "currentPage" ,page);
    });

    $('.btu-next').click(function(event){
        var page = $( "form" ).attr( "currentPage" );
        $('.form-page').hide();
        page = parseInt(page);
        page++;
        $( "form" ).attr( "currentPage" ,page);
        // alert('#form-page-'+page+'');
        $('#form-page-'+page+'').show();
        //circle
        $( ".circle" ).removeClass( "on" );
        $('#circle-'+page+'').addClass( "on" );
    });  

    $('.btu-prev').click(function(event){
        var page = $( "form" ).attr( "currentPage" );
        $('.form-page').hide();
        page = parseInt(page);
        page--;
        $( "form" ).attr( "currentPage" ,page);
        // alert('#form-page-'+page+'');
        $('#form-page-'+page+'').show();
        //circle
        $( ".circle" ).removeClass( "on" );
        $('#circle-'+page+'').addClass( "on" );
    });    

   $('.up-screenshots-btu').click(function(event){
            $('.screenshots-box').slideToggle();
    }); 

    $('.up-file-btu').click(function(event){
            $('.files-box').slideToggle();
    });   

   


    // var postForm = $( '#addProject' ); 
    // postForm.on( 'submit', function( e ) {
    //       e.preventDefault(); 
    //       $.ajax({
    //            url: magicalData.siteURL +'/wp-json/wp/v2/projects?title='+$('#project_name').val()+'&status=publish',
    //            method: 'POST',
    //            crossDomain: true,
    //            contentType: 'application/json',
    //            beforeSend: function ( xhr ) {
    //                   xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
    //            },
    //            success: function( data ) {
    //                console.log( 'newPostSuccess',data );
    //                updateNewProject(data.id);
    //            },
    //            error: function( error ) {
    //                console.log( 'newPostError',error );
    //            }
    //       });

    //       function updateNewProject(projectID){
    //           var postForm = $( '#addProject' ); 
    //           // var postForm  = $( this );
    //           var url    = magicalData.siteURL +'/wp-json/wp/v2/projects/'+projectID;
    //           var method = postForm.attr( 'method' );
    //           var data   = postForm.serializeArray();
    //           console.log('updateNewProjectData',data);
              
    //           $.ajax( {
    //               url: url,
    //               method: method,
    //               beforeSend: function ( xhr ) {
    //                   xhr.setRequestHeader( 'X-WP-Nonce', magicalData.nonce );
    //               },
    //               data: data,
    //               dataType: 'json',
    //               success: function( data ) {
    //                     alert('success postID : ' + projectID);
    //                     console.log( 'updateNewProjectSuccess',data );
    //                 },
    //               error: function( error ) {
    //                     console.log( 'updateNewProjectError', error );
    //                 }
    //           } )
    //       }
    // });
});
// https://github.com/jcottrell/vue-example-contact-form/blob/master/index.html
  // Vue.use(VeeValidate);

// const newrule = {
//   validate(value) {
//     return new Promise(resolve => {
//     });
//   }
// };
//   VeeValidate.Validator.extend('checkuser',newrule);

var vm = new Vue({
    el: '#addProject', // id of the 'app'
    data: {
        title:'',  
        local_authority:'',
        type_of:'',
        size_of_authority:'', 
        system_type_:'',
        project_designation:'',
        project_status:'',
        start_date:'',
        end_date:'',
        supplier_name:'',
        explanation:'',
        points_for_improvement:'',
        points_for_preservation:'',
        full_name:'',
        tel:'',
        position:'',
        tip:'',
        maxLength: 140,
        RequiredField: 'שדה חובה!',
        RequiredFieldStatus : false,
        RequiredMessage: 'אין להשאיר שדה זה ריק',
        RequiredFieldSelectStatus: false
    },
    methods: { // all the actions our app can do

        isRequired : function(event){
            if(this.title.length > 0){
               this.RequiredFieldStatus = false;
            }else{
              this.RequiredFieldStatus =  true;
            }

        },
        isRequiredSelect : function(event){
          console.log(event)
            // if(this.title.length > 0){
            //    this.RequiredFieldStatus = false;
            // }else{
            //   this.RequiredFieldStatus =  true;
            // }
        },
        sizeOfAuthority: function(val){
          if(val == 'A'){this.size_of_authority = 'קטנה'};
          if(val == 'B'){this.size_of_authority = 'בינונית'};
          if(val == 'C'){this.size_of_authority = 'גדולה'};
          alert(this.size_of_authority)
        },
        projectDesignation: function(val){
          if(val == 'A'){this.project_designation = 'פנים רשותי'};
          if(val == 'B'){this.project_designation = 'שירות לתושב'};
          alert(this.project_designation);
        },projectStatus: function(val){
          if(val == 'A'){this.project_status = 'ייזום'};
          if(val == 'B'){this.project_status ='אפיון'};
          if(val == 'C'){this.project_status ='התקשרות עם ספק'};
          if(val == 'D'){this.project_status ='פיתוח'};
          if(val == 'E'){this.project_status ='הטמעה'};
          if(val == 'F'){this.project_status ='סיום'};
          alert(this.project_status);
        },


        // isValidEmail: function () { // TODO is a@b a valid email?
        //     var valid = this.email.indexOf('@') > 0;
        //     console.log('checking for a valid email: ' + valid);
        //     return valid;
        // },
        // isValidMessage: function () { // what is message is just spaces?
        //     var valid = (this.message.length > 0) &&
        //         (this.message.length < this.maxLength);
        //     console.log('checking for a valid message: ' + valid);
        //     return valid;
        // },
        // checkMessage: function () {
        //     // TODO keep the message below maxMessageLength?
        //     //      or maybe change the text, background, or counter color?
        // },
        newProject: function(){
            $.ajax({
                 url: magicalData.siteURL +'/wp-json/wp/v2/projects?title='+this.title+'&status=publish',
                 method: 'POST',
                 crossDomain: true,
                 contentType: 'application/json',
                 beforeSend: function ( xhr ) {
                        xhr.setRequestHeader("X-WP-Nonce", magicalData.nonce);
                 },
                 success: function( data ) {
                     console.log( 'newPostSuccess',data );
                     vm.updateNewProject(data.id);
                 },
                 error: function( error ) {
                     console.log( 'newPostError',error );
                 }
            });
        },
        updateNewProject : function (projectID){
              var postForm = $( '#addProject' ); 
              // var postForm  = $( this );
              var url    = magicalData.siteURL +'/wp-json/wp/v2/projects/'+projectID;
              // var method = postForm.attr( 'method' );
              var method = 'POST';
              // var data   = fields.serializeArray();
              // var data   = JSON.stringify(fields);
              var data = vm.dataToObj();
              console.log('fields',data);
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
        },dataToObj: function(){
            // var fields = { 
            //    local_authority:"this.local_authority",
            //    type_of:"this.type_of",
            //    size_of_authority:"this.size_of_authority",
            //    system_type_:"this.system_type_",
            //    project_designation:"this.project_designation",
            //    project_status:"this.project_status",
            //    start_date:"this.start_date",
            //    end_date:"this.end_date",
            //    supplier_name:"this.supplier_name",
            //    supplier_name:"this.explanation",
            //    points_for_improvement:"this.points_for_improvement",
            //    points_for_preservation:"this.points_for_preservation",
            //    full_name:"this.full_name",
            //    tel:"this.tel",
            //    position:"this.position",
            //    tip:"this.tip"
            // };

            var fields = [
              {name: "fields[local_authority]", value: this.local_authority},
              {name: "fields[type_of]", value: this.type_of},
              {name: "fields[size_of_authority]", value: this.size_of_authority},
              {name: "fields[system_type_]", value: this.system_type_},
              {name: "fields[project_designation]", value: this.project_designation},
              {name: "fields[project_status]", value: this.project_status},
              {name: "fields[start_date]", value: this.start_date},
              {name: "fields[end_date]", value: this.end_date},
              {name: "fields[supplier_name]", value: this.supplier_name},
              {name: "fields[explanation]", value: this.explanation},
              {name: "fields[points_for_improvement]", value: this.points_for_improvement},
              {name: "fields[points_for_preservation]", value: this.points_for_preservation},
              {name: "fields[full_name]", value: this.full_name},
              {name: "fields[tel]", value: this.tel},
              {name: "fields[position]", value: this.position},
              {name: "fields[tip]", value: this.tip}
            ];
            return fields;
        } ,      
        submitForm: function () {
            event.preventDefault();
            this.newProject();
            alert(  'submitting message...');
        }
    }
});

</script>

  </body>

<?php 
get_footer();
 ?>
