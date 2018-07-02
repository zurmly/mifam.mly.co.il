<?php
 /* Template Name: home page
 */

get_header();
?>


    <section class="home-banner text-white">
        <div class="container text-center">

            <h1>פרוייקט 265 - המיזם הלאומי לפיתוח ושיתוף <br>
                ידע לקידום דיגיטציה ברשויות המקומיות
            </h1>
            <div class="row">
                <div class="col-md-12">
                    <div id="imaginary_container">
                        <div id="search-box" class="input-group stylish-input-group search-box">
                            <form id="search-home-page" action="/search" action="POST" >
<!--                            <input type="text" class="form-control search-input"  placeholder="חפשו פרויקט / תחום טכנולגי / עיר או כל מידע אחר ... אנחנו נמצא אותו :)" >-->
<!--                            <span class="input-group-addon search-btu"></span>-->
<!--                                http://api-wp.mly.co.il/wp-json/search_post_type/v1/search-->
                                <autocomplete
                                        id="input__id-optional"
                                        class="form-control search-input"
                                        name="people"
                                        placeholder="חפשו פרויקט / תחום טכנולגי / עיר או כל מידע אחר ... אנחנו נמצא אותו :)"
                                        url="<?=WP_SITEURL?>/wp-json/search_post_type/v1/search"
                                        param="to_search"
                                        limit="5"
                                        anchor="post_title"
                                        label="type"
                                        model="vModelLike">
                                </autocomplete>

                                <button type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row home-search-link">
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">

                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                     <div style="color: #2d68aa;font-size: 40px">361</div>
                     <div style="color: #2d68aa;font-size: 26px">פרויקטים באתר</div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-3">
        <div class="container" style=" width: 900px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    פרויקטים ששווה להציץ בהם
                    <br>
                    <br>
                </div>
                <div class="col-md-3">
                    <img src="<?=THEMEURL?>/images/3.jpg" alt="">
                </div>
                <div class="col-md-3">
                    <img src="<?=THEMEURL?>/images/3.jpg" alt="">
                </div>
                <div class="col-md-3">
                    <img src="<?=THEMEURL?>/images/3.jpg" alt="">
                </div>
                <div class="col-md-3">
                    <img src="<?=THEMEURL?>/images/3.jpg" alt="">
                </div>
                <div class="col-md-12 text-center" style="color:#2d68aa;font-weight: bold;padding: 30px 0;">
                    לכל הפרויקטים >
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>

    <section id="section-4">
        <div class="container" style=" width: 900px;">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?=THEMEURL?>/images/4.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img src="<?=THEMEURL?>/images/6.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="section-5">
        <div class="container" style=" width: 900px;">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>מידע שימושי</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img src="<?=THEMEURL?>/images/7.jpg" alt="">
                </div>
            </div>

        </div>
    </section>

    <section id="section-6">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>הערים הכי פעילות באתר</h2>
                    <div>
                        לכל אחת מהן יש פרוייקטים דיגיטלים שיעולים לעניין גם אתכם,
                        <BR>
                        קבלו את הערים הפעילות ביותר באתר</div>
                </div>
            </div>
            <div class="row" style=" margin: 40px 0; ">
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/8.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/8.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/8.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/8.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/8.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="section-7">
        <div class="section-7-line"></div>
        <div class="container" style="">
            <div class="row" style=" margin: 40px 0; ">
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/9.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/9.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/9.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/9.jpg" alt="">
                </div>
                <div class="col-5">
                    <img src="<?=THEMEURL?>/images/9.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
<!-- <script src="./vue-autocomplete.js"></script> -->
<!--<script src="--><?//=THEMEURL?><!--/vue-autocomplete/vue-autocomplete.min.js"></script>-->
<script src="<?=THEMEURL?>/vue-autocomplete/vue-autocomplete.js"></script>
<script>
    new Vue({
        el: '#search-box',
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
                var toUrl = magicalData.siteURL+'/'+data.post_type+'/'+data.post_name;
                window.location = toUrl;
            },
            // Autocomplete-people on hide
            'autocomplete-people:hide': function(){
                console.log('hide-people');
            },
        }
    });
</script>


<?php

get_footer();
