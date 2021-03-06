<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Start_It
 */

get_header();
?>


<?php get_template_part( 'parts/content-slider', 'index' ); ?>
<?php get_template_part( 'parts/content-services', 'index' ); ?>
<?php get_template_part( 'parts/content-about', 'index' ); ?>
<?php get_template_part( 'parts/content-work', 'index' ); ?>
<?php get_template_part( 'parts/content-blog', 'index' ); ?>
<?php get_template_part( 'parts/content-contact', 'index' ); ?>

<?php get_footer(); ?>
