<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package digital_israel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="">
    <div class="container">
        <div class="header-right">
            <a href="#" class="btn btn-1">התחבר ></a>
            <a href="#" class="regNowLink">הרשם עכשיו &gt;</a>
        </div>
        <div class="header-left">
            <img src="wp-content/themes/digital_israel/images/1.jpg" height="80">
        </div>

    </div>
</header>

<!-- Navigation -->
<div class="main-menu-background">
    <div class="container">
    <nav class="navbar">
<!--        <div class="collapse navbar-collapse" id="myNavbar">-->
<!--            <ul header-rightclass="nav navbar-nav">-->
<!--                <li class="active"><a href="http://api-wp.mly.co.il">Home</a></li>-->
<!--                <li><a href="http://api-wp.mly.co.il/%D7%94%D7%95%D7%A1%D7%A4%D7%AA-%D7%A4%D7%A8%D7%95%D7%99%D7%A7%D7%98/">הוספת פרויקט</a></li>-->
<!--                <li><a href="http://api-wp.mly.co.il/%D7%91%D7%93%D7%99%D7%A7%D7%94-%D7%93%D7%99%D7%92%D7%99%D7%98%D7%9C%D7%99%D7%AA/">בדיקה דיגיטלית</a></li>-->
<!--                <li><a href="http://api-wp.mly.co.il/search/">עמוד חיפוש</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<?php
wp_nav_menu( array(
	'theme_location' => 'top-menu',
	'container' => 'ul',
	'menu_class' => 'top-menu'
	)
);
?>
    </nav>
</div>
    <div class="shareUs">
        <img src="wp-content/themes/digital_israel/images/hat.png" alt="">
        <p>שתפו אותנו<br>בפרויקט<br>שלכם!</p>
    </div>
</div>

