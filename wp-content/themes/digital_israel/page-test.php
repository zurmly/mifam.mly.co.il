<?php
/**
Template Name: test page
 */
?>
<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue Autocomplete Component</title>
    <link rel="stylesheet" href="<?=THEMEURL?>/vue-autocomplete//vue-autocomplete.css">
    <style>
        .main{
            margin-left: 35px;
            display: inline-block;
            float: left;
            width: 25%;
            margin-right: 235px;
        }
        .preview{
            display: inline-block;
            float: left;
            max-width: 45%;
        }
        pre{
            background: #f8f8f8;
            padding: 15px;
        }
    </style>
</head>
<body>

<div class="main">
    <autocomplete
            id="input__id-optional"
            class="input_class optional"
            name="people"
            placeholder="חפשו פרויקט / תחום טכנולגי / עיר או כל מידע אחר ... אנחנו נמצא אותו :)"
            url="https://typeahead-js-twitter-api-proxy.herokuapp.com/demo/search"
            param="q"
            limit="5"
            anchor="name"
            label="type"
            model="vModelLike">
    </autocomplete>
</div>
<!--<div class="preview">-->
<!--    <h1>Data Selected</h1>-->
<!--    <pre>{{ data | json 2 }}</pre>-->
<!--</div>-->

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
<!-- <script src="./vue-autocomplete.js"></script> -->
<!--<script src="--><?//=THEMEURL?><!--/vue-autocomplete/vue-autocomplete.min.js"></script>-->
<script src="<?=THEMEURL?>/vue-autocomplete/vue-autocomplete.js"></script>
<!--https://github.com/BosNaufal/vue-autocomplete-->
<script>
    new Vue({
        el: 'body',
        data: function() {
            return {
                vModelLike: "",
                data: {}
            };
        },
        events: {
            /**
             *	Global Autocomplete Callback Event
             *
             *	@event-name autocomplete:{event-name}
             *	@param {String} name name of auto
             *	@param {Object} data
             *	@param {Object} json - ajax-loaded only
             */
            // Autocomplete on before ajax progress
            'autocomplete:before-ajax': function (name,data){
                console.log('before-ajax',name,data);
            },
            // Autocomplete on ajax progress
            'autocomplete:ajax-progress': function(name,data){
                console.log('ajax-progress',data);
            },
            // Autocomplete on ajax loaded
            'autocomplete:ajax-loaded': function(name,data,json){
                console.log('ajax-loaded',data,json);
            },
            // Autocomplete on focus
            'autocomplete:focus': function(name,evt){
                console.log('focus',name,evt);
            },
            // Autocomplete on input
            'autocomplete:input': function(name,data){
                console.log('input',data);
            },
            // Autocomplete on blur
            'autocomplete:blur': function(name,evt){
                console.log('blur',evt);
            },
            // Autocomplete on show
            'autocomplete:show': function(name){
                console.log('show',name);
            },
            // Autocomplete on selected
            'autocomplete:selected': function(name,data){
                console.log('selected',data);
                this.data = data;
            },
            // Autocomplete on hide
            'autocomplete:hide': function(name){
                console.log('hide',name);
            },
            /**
             *	Spesific Autocomplete Callback Event By Name
             *
             *	@event-name autocomplete-{component-name}:{event-name}
             *	@param {String} name name of auto
             *	@param {Object} data
             *	@param {Object} json - ajax-loaded only
             */
            // Autocomplete on before ajax progress
            'autocomplete-people:before-ajax': function(data){
                console.log('before-ajax-people',data);
            },
            // Autocomplete on ajax progress
            'autocomplete-people:ajax-progress': function(data){
                console.log('ajax-progress-people',data);
            },
            // Autocomplete on ajax loaded
            'autocomplete-people:ajax-loaded': function(data,json){
                console.log('ajax-loaded-people',data,json);
            },
            // Autocomplete-people on focus
            'autocomplete-people:focus': function(evt){
                console.log('focus-people',evt);
            },
            // Autocomplete-people on input
            'autocomplete-people:input': function(data){
                console.log('input-people',data);
            },
            // Autocomplete-people on blur
            'autocomplete-people:blur': function(evt){
                console.log('blur-people',evt);
            },
            // Autocomplete-people on show
            'autocomplete-people:show': function(){
                console.log('show-people');
            },
            // Autocomplete-people on selected
            'autocomplete-people:selected': function(data){
                console.log('selected-people',data);
            },
            // Autocomplete-people on hide
            'autocomplete-people:hide': function(){
                console.log('hide-people');
            },
        }
    });
</script>
</body>
</html>
<?php
//get_footer();
?>





