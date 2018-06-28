<?php /* Template Name: form-validation */ ?>

<?php get_header();

// https://scotch.io/tutorials/template-driven-form-validation-in-vuejs
 ?>

    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
        <h5>Sign up once and watch any of our free demos.</h5>
          <form id="signup-form" @submit.prevent="processForm">
<div class="row">
  <div class="col-md-6">
     <div class="form-group">
        <label for="local_authority">שם הרשות</label>
            <select   class="form-control selectpicker" id="local_authority" name="fields[local_authority]">
            <?php get_select_val("local_authority"); ?>
       </select>
    </div>
  </div>
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Your Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" name="name" placeholder="Name" :class="{ 'form-control': true, 'is-danger': errors.has('name') }" v-model="name" v-validate="'required|alpha'">
                 
                </div>
                 <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Your Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" :class="{ 'form-control': true, 'is-danger': errors.has('email') }" name="email" placeholder="my@email.com" v-model="email" v-validate="'required|email'">
                    
                </div>
                <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" :class="{ 'form-control': true, 'is-danger': errors.has('username') }" name="username" placeholder="Enter your username" v-model="username" v-validate="'required|checkuser'">
                </div>
                 <span v-show="errors.has('username')" class="help is-danger">{{ errors.first('username') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" :class="{ 'form-control': true, 'is-danger': errors.has('password') }" name="password" placeholder="Enter a password" v-model="password" v-validate="'required|min:6'">
                </div>
                <span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                
                <input v-validate="'required|confirmed:password'" name="password_confirmation" type="password" :class="{ 'form-control': true, 'is-danger': errors.has('password') }" placeholder="Password, Again" data-vv-as="password">
                </div>
                <span v-show="errors.has('password_confirmation')" class="help is-danger">{{ errors.first('password_confirmation') }}</span>
              </div>
            </div>

            <div class="form-group ">
              <button id="button" :disabled="errors.any()" class="btn btn-primary btn-lg btn-block login-button">Register</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

<script type="text/javascript">
  Vue.use(VeeValidate);

const newrule = {
  validate(value) {
    return new Promise(resolve => {
    });
  }
};
  VeeValidate.Validator.extend('checkuser',newrule);
    const signupForm = new Vue({
        el: '#signup-form'


    });




</script>
<style type="text/css">
  
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
     height: 100%;
  background-repeat: no-repeat;
  background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
  font-family: 'Oxygen', sans-serif;
      background-size: cover;
}

.main{
  margin:50px 15px;
}

h1.title { 
  font-size: 50px;
  font-family: 'Passion One', cursive; 
  font-weight: 400; 
}

hr{
  width: 10%;
  color: #fff;
}

.form-group{
  margin-bottom: 15px;
}

label{
  margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
  background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
  margin-top: 30px;
  margin: 0 auto;
  max-width: 400px;
    padding: 10px 40px;
  background:rgb(123, 131, 134);
      color: #FFF;
    text-shadow: none;
  -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
  margin-top: 5px;
}

.login-register{
  font-size: 11px;
  text-align: center;
}
.is-danger{
  color: red;
  font-weight: 700;
}
.help {
    background: white;
    }


</style>

<?php 
get_footer();
 ?>
