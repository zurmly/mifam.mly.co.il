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
                            <form id="search-home-page" action="/search" action="POST">
                                <!--                            <input type="text" class="form-control search-input"  placeholder="חפשו פרויקט / תחום טכנולגי / עיר או כל מידע אחר ... אנחנו נמצא אותו :)" >-->
                                <!--                            <span class="input-group-addon search-btu"></span>-->
                                <!--                                http://api-wp.mly.co.il/wp-json/search_post_type/v1/search-->
                                <autocomplete
                                        id="input__id-optional"
                                        class="form-control search-input"
                                        name="people"
                                        placeholder="חפשו פרויקט / תחום טכנולגי / עיר או כל מידע אחר ... אנחנו נמצא אותו :)"
                                        url="<?= WP_SITEURL ?>/wp-json/search_post_type/v1/search"
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
                        <img src="wp-content/themes/digital_israel/images/star.png" alt="">
                    </div>
                    <div class="search-link-text">
                        חדש במאגר
                        <br>
                        (8)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/bag.png" alt="">
                    </div>
                    <div class="search-link-text">
מתווה מקצועי
                        <br>
                        (3)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/calendar.png" alt="">
                    </div>
                    <div class="search-link-text">
                        ניהול
                        <br>
                        (5)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/book.png" alt="">
                    </div>
                    <div class="search-link-text">
                        חינוך
                        <br>
                        (12)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/sites.png" alt="">
                    </div>
                    <div class="search-link-text">
                        אתרים
                        <br>
                        (5)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/health.png" alt="">
                    </div>
                    <div class="search-link-text">
                        בריאות
                        <br>
                        (7)
                    </div>
                </div>
                <div class="search-link-box">
                    <div class="search-link-icon">
                        <img src="wp-content/themes/digital_israel/images/manpower.png" alt="">
                    </div>
                    <div class="search-link-text">
                        כח אדם
                        <br>
                        (9)
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sectionTitle">כדאי לדעת...</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 goodToKnow">
                    <img src="wp-content/themes/digital_israel/images/section2Image.jpg" alt="">
                    <h3 class="subTitle">אירוע חדש...</h3>
                    <p>אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית סת.</p>
                </div>
                <div class="col-md-3 goodToKnow">
                    <img src="wp-content/themes/digital_israel/images/section2Image.jpg" alt="">
                    <h3 class="subTitle">אירוע חדש...</h3>
                    <p>אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית סת.</p>
                </div>
                <div class="col-md-3 goodToKnow">
                    <img src="wp-content/themes/digital_israel/images/section2Image.jpg" alt="">
                    <h3 class="subTitle">אירוע חדש...</h3>
                    <p>אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית סת.</p>
                </div>
                <div class="col-md-3 goodToKnow">
                    <img src="wp-content/themes/digital_israel/images/section2Image.jpg" alt="">
                    <h3 class="subTitle">אירוע חדש...</h3>
                    <p>אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית סת.</p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section id="section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="sectionTitle"><span class="projNumber">361</span> פרויקטים באתר</h2>
                    <h4 class="subTitle">פרויקטים ששווה להציץ בהם</h4>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 lastProjects">
                    <div class="imageTitle">
                        <span>חינוך</span>
                    </div>
                    <div class="underImageTitle">
                        מערכת CRM
                    </div>
                    <div class="textWrapper">
                        <p class="title">תל אביב</p>
                        <p class="innerTextTitle">
                            מעכרת ניהול מכרזים לבניין ודיור בעיריית אשקלון
                        </p>
                        <p class="innerDate">ת.עדכון אחרון: 12.3.18</p>
                        <p class="innerTextData">
                            המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות האשכול
                        </p>
                        <a href="#" class="innerReadMore btn">קרא עוד ></a>
                    </div>
                </div>
                <div class="col-md-3 lastProjects">
                    <div class="imageTitle">
                        <span>חינוך</span>
                    </div>
                    <div class="underImageTitle">
                        מערכת CRM
                    </div>
                    <div class="textWrapper">
                        <p class="title">תל אביב</p>
                        <p class="innerTextTitle">
                            מעכרת ניהול מכרזים לבניין ודיור בעיריית אשקלון
                        </p>
                        <p class="innerDate">ת.עדכון אחרון: 12.3.18</p>
                        <p class="innerTextData">
                            המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות האשכול
                        </p>
                        <a href="#" class="innerReadMore btn">קרא עוד ></a>
                    </div>
                </div>
                <div class="col-md-3 lastProjects">
                    <div class="imageTitle">
                        <span>חינוך</span>
                    </div>
                    <div class="underImageTitle">
                        מערכת CRM
                    </div>
                    <div class="textWrapper">
                        <p class="title">תל אביב</p>
                        <p class="innerTextTitle">
                            מעכרת ניהול מכרזים לבניין ודיור בעיריית אשקלון
                        </p>
                        <p class="innerDate">ת.עדכון אחרון: 12.3.18</p>
                        <p class="innerTextData">
                            המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות האשכול
                        </p>
                        <a href="#" class="innerReadMore btn">קרא עוד ></a>
                    </div>
                </div>
                <div class="col-md-3 lastProjects">
                    <div class="imageTitle">
                        <span>חינוך</span>
                    </div>
                    <div class="underImageTitle">
                        מערכת CRM
                    </div>
                    <div class="textWrapper">
                        <p class="title">תל אביב</p>
                        <p class="innerTextTitle">
                            מעכרת ניהול מכרזים לבניין ודיור בעיריית אשקלון
                        </p>
                        <p class="innerDate">ת.עדכון אחרון: 12.3.18</p>
                        <p class="innerTextData">
                            המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות האשכול
                        </p>
                        <a href="#" class="innerReadMore btn">קרא עוד ></a>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="#" class="allProjectsLink">לכל הפרויקטים ></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-4">
        <div class="container">
            <h2 class="sectionTitle">כדאי לדעת...</h2>
            <p class="subTitle">
                לכל אחת מהן יש פרוייקטים דיגיטלים שיכולים לעניין גם אתכם,
                <br>
                קבלו את הערים הפעילות ביותר באתר
            </p>
            <div class="row mostActiveCities">
                <div class="mostActiveCity">
                    <div class="imageWrapper">
                        <p class="projectsNumber">12</p>
                        <p class="projectsText">פרויקטים</p>
                    </div>
                    <div class="mostActiveData">
                        <h4 class="mostTitle">חיפה</h4>
                        <p class="mostText">המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות
                            האשכול</p>
                        <a href="#" class="btn mostButton">קרא עוד</a>
                    </div>
                </div>
                <div class="mostActiveCity">
                    <div class="imageWrapper">
                        <p class="projectsNumber">12</p>
                        <p class="projectsText">פרויקטים</p>
                    </div>
                    <div class="mostActiveData">
                        <h4 class="mostTitle">חיפה</h4>
                        <p class="mostText">המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות
                            האשכול</p>
                        <a href="#" class="btn mostButton">קרא עוד</a>
                    </div>
                </div>
                <div class="mostActiveCity">
                    <div class="imageWrapper">
                        <p class="projectsNumber">12</p>
                        <p class="projectsText">פרויקטים</p>
                    </div>
                    <div class="mostActiveData">
                        <h4 class="mostTitle">חיפה</h4>
                        <p class="mostText">המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות
                            האשכול</p>
                        <a href="#" class="btn mostButton">קרא עוד</a>
                    </div>
                </div>
                <div class="mostActiveCity">
                    <div class="imageWrapper">
                        <p class="projectsNumber">12</p>
                        <p class="projectsText">פרויקטים</p>
                    </div>
                    <div class="mostActiveData">
                        <h4 class="mostTitle">חיפה</h4>
                        <p class="mostText">המטרה להקים מערכת GIS אזורית ככלי לקבלת החלטות אסטרטגיות עבור רשויות
                            האשכול</p>
                        <a href="#" class="btn mostButton">קרא עוד</a>
                    </div>
                </div>
                <div class="mostActiveCity">
                    <div class="imageWrapper howMuchDigital">
                    </div>
                    <div class="mostActiveData">
                        <h4 class="mostTitle">כמה העיר שלך דיגיטלית?</h4>
                        <p class="mostText">אז יש לכם מנהל דיגיטל ואתם ממש פעילים בפייסבוק... האם זה אומר שאתם סופר דיגיטליים? הכנו לכם שאלון קצר שייתן תשובה בנושא</p>
                        <a href="#" class="btn mostButtonForm">לשאלון המלא ></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="wp-content/themes/digital_israel/images/mainEvenImage.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="sectionTitle mainEventTitle">האירוע השנתי למנהלי שיווק<br>בדיגיטל נפתחה ההרשמה!</h2>
                    <p class="mainEvent">
                        לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית גולר מונפרר סוברט לורם שבצק יהול, לכנוץ בעריר גק ליץ, נולום ארווס סאפיאן - פוסיליס קוויס, אקווזמן קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף קונדימנטום קורוס בליקרה, נונסטי קלובר בריקנה סטום.
                    </p>
                    <a href="#" class="btn mainEventButton">לפרטים ולהרשמה ></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-6">
        <div class="container">
            <h2 class="sectionTitle dataSection"><span class="projNumber">361</span> פרויקטים באתר</h2>
            <h4 class="subTitle">פרויקטים ששווה להציץ בהם</h4>
            <div class="dataItemsWrapper">
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
                <div class="dataItem">
                    <h4 class="dataItemTitle">קול קורא להגשת מועמדות<br>לשיפוץ גינות עירוניות</h4>
                    <p class="dataItemDate">ת.עדכון אחרון: 12.3.18</p>
                    <p class="dataItemText">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קונסקטורר אדיפיסינג אלית. סת אלמנקום ניסי נון ניבאה.</p>
                    <a href="#" class="readMoreDataItem">קרא עוד</a>
                </div>
            </div>
            <a href="#" class="toAllData">למאגר המידע ></a>
        </div>
    </section>
<div class="floatButtonWrapper">
    <div class="floatImage"></div>
    <p class="floatText">
        בדוק עד כמה<br>
        הרשות שלך<br>
        דיגיטלית!
    </p>
    <a href="#" class="btn floatButton">בואו נתחיל ></a>
</div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
    <!-- <script src="./vue-autocomplete.js"></script> -->
    <!--<script src="--><?//=THEMEURL?><!--/vue-autocomplete/vue-autocomplete.min.js"></script>-->
    <script src="<?= THEMEURL ?>/vue-autocomplete/vue-autocomplete.js"></script>
    <script>
        new Vue({
            el: '#search-box',
            data: function () {
                return {
                    vModelLike: "",
                    data: {}
                };
            },
            events: {
                /**
                 *    Global Autocomplete Callback Event
                 *
                 *    @event-name autocomplete:{event-name}
                 *    @param {String} name name of auto
                 *    @param {Object} data
                 *    @param {Object} json - ajax-loaded only
                 */
                // Autocomplete on before ajax progress
                'autocomplete:before-ajax': function (name, data) {
                    console.log('before-ajax', name, data);
                },
                // Autocomplete on ajax progress
                'autocomplete:ajax-progress': function (name, data) {
                    console.log('ajax-progress', data);
                },
                // Autocomplete on ajax loaded
                'autocomplete:ajax-loaded': function (name, data, json) {
                    console.log('ajax-loaded', data, json);
                },
                // Autocomplete on focus
                'autocomplete:focus': function (name, evt) {
                    console.log('focus', name, evt);
                },
                // Autocomplete on input
                'autocomplete:input': function (name, data) {
                    console.log('input', data);
                },
                // Autocomplete on blur
                'autocomplete:blur': function (name, evt) {
                    console.log('blur', evt);
                },
                // Autocomplete on show
                'autocomplete:show': function (name) {
                    console.log('show', name);
                },
                // Autocomplete on selected
                'autocomplete:selected': function (name, data) {
                    console.log('selected', data);
                    this.data = data;
                },
                // Autocomplete on hide
                'autocomplete:hide': function (name) {
                    console.log('hide', name);
                },
                /**
                 *    Spesific Autocomplete Callback Event By Name
                 *
                 *    @event-name autocomplete-{component-name}:{event-name}
                 *    @param {String} name name of auto
                 *    @param {Object} data
                 *    @param {Object} json - ajax-loaded only
                 */
                // Autocomplete on before ajax progress
                'autocomplete-people:before-ajax': function (data) {
                    console.log('before-ajax-people', data);
                },
                // Autocomplete on ajax progress
                'autocomplete-people:ajax-progress': function (data) {
                    console.log('ajax-progress-people', data);
                },
                // Autocomplete on ajax loaded
                'autocomplete-people:ajax-loaded': function (data, json) {
                    console.log('ajax-loaded-people', data, json);
                },
                // Autocomplete-people on focus
                'autocomplete-people:focus': function (evt) {
                    console.log('focus-people', evt);
                },
                // Autocomplete-people on input
                'autocomplete-people:input': function (data) {
                    console.log('input-people', data);
                },
                // Autocomplete-people on blur
                'autocomplete-people:blur': function (evt) {
                    console.log('blur-people', evt);
                },
                // Autocomplete-people on show
                'autocomplete-people:show': function () {
                    console.log('show-people');
                },
                // Autocomplete-people on selected
                'autocomplete-people:selected': function (data) {
                    console.log('selected-people', data);
                    var toUrl = magicalData.siteURL + '/' + data.post_type + '/' + data.post_name;
                    window.location = toUrl;
                },
                // Autocomplete-people on hide
                'autocomplete-people:hide': function () {
                    console.log('hide-people');
                },
            }
        });
    </script>


<?php

get_footer();
