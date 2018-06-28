<?php
/**
Template Name: search page
 */
?>
<?php get_header(); ?>

<h1>search</h1>

<?php
$query = "SELECT * FROM {$wpdb->prefix}posts WHERE `post_type` = 'database'";
global $wpdb;
$results = $wpdb->get_results( $query, OBJECT );
+kint::dump($results);
?>

<?php
get_footer();
?>





