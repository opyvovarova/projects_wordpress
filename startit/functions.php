<?php
/**
 * Start It functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Start_It
 */


add_theme_support( 'custom-logo' );

/**
 * Enqueue scripts and styles.
 */
function start_it_scripts() {
	wp_enqueue_style( 'start-it-bootstrap', get_stylesheet_directory_uri() . '/inc/css/bootstrap.css');
	wp_enqueue_style( 'start-it-animate', get_stylesheet_directory_uri() . '/inc/css/animate.css');
	wp_enqueue_style( 'start-it-menu', get_stylesheet_directory_uri() . '/inc/css/menu.css');
	wp_enqueue_style( 'start-css-owl', get_stylesheet_directory_uri() . '/inc/css/owl.carousel.css');
	wp_enqueue_style( 'start-css-fancybox', get_stylesheet_directory_uri() . '/inc/css/jquery.fancybox.css');
	wp_enqueue_style( 'start-it-style', get_stylesheet_directory_uri() . '/inc/css/style.css');



	wp_enqueue_script( 'start-jquery', get_template_directory_uri() . '/inc/js/jquery-3.2.1.min.js', array(), '', true );
	wp_enqueue_script( 'start-bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'start-mixitup', get_template_directory_uri() . '/inc/js/jquery.mixitup.min.js', array(), '', true );
	wp_enqueue_script( 'start-fancybox', get_template_directory_uri() . '/inc/js/jquery.fancybox.min.js', array(), '', true );
	wp_enqueue_script( 'start-owl', get_template_directory_uri() . '/inc/js/owl.carousel.js', array(), '', true );
	wp_enqueue_script( 'start-it-navigation', get_template_directory_uri() . '/inc/js/menu.js', array(), '', true );
	wp_enqueue_script( 'start-typed', get_template_directory_uri() . '/inc/js/typed.min.js', array(), '', true );
	wp_enqueue_script( 'start-custom', get_template_directory_uri() . '/inc/js/custom.js', array(), '', true );


	
}
add_action( 'wp_enqueue_scripts', 'start_it_scripts' );

