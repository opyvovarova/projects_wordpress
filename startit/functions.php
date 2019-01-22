<?php
/**
 * Start It functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Start_It
 */


 //Set Up
add_theme_support( 'custom-logo' );

add_action('after_setup_theme', function(){
	add_theme_support( 'menus' );
});
add_theme_support( 'post-thumbnails', array( 'post', 'portfolio', 'about' ,'article') );

function add_image_sizes() {
	add_image_size( 'articles', 365, 280, TRUE );
	add_image_size( 'slider', 1350, 900, TRUE );
}
add_action( 'init', 'add_image_sizes' );

/**Portfolio c post type */
function my_custom_post_portfolio() {
	$labels = array(
	  'name'               => _x( 'Portfolio', 'post type general name' ),
	  'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'portfolio' ),
	  'add_new_item'       => __( 'Add New Portfolio' ),
	  'edit_item'          => __( 'Edit Portfolio' ),
	  'new_item'           => __( 'New Portfolio' ),
	  'all_items'          => __( 'All Portfolio' ),
	  'view_item'          => __( 'View Portfolio' ),
	  'search_items'       => __( 'Search Portfolio' ),
	  'not_found'          => __( 'No portfolio found' ),
	  'not_found_in_trash' => __( 'No portfolio found in the Trash' ), 
	  'parent_item_colon'  => '',
	  'query_var' 		   => 'portfolio',
	  'menu_name'          => 'Portfolio',

	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => '',
	  'public'        => true,
	  'menu_position' => 5,
	  'menu_icon'		   => 'dashicons-images-alt2',
	  'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	  'has_archive'   => true,
	);

	register_taxonomy( 
		'portfolio_tag',
		'portfolio',
		array(
			'hierarchical'	=> false,
			'label'			=>__('Tags', CURRENT_THEME),
			'singular_name' =>__('Tag', CURRENT_THEME),
			'rewrite'		=> true,
			'query_var'		=> true
		));

	register_post_type( 'portfolio', $args ); 
  }

  add_action( 'init', 'my_custom_post_portfolio' );



  function my_taxonomies_portfolio() {
	$labels = array(
	  'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search Portfolio Categories' ),
	  'all_items'         => __( 'All Portfolio Categories' ),
	  'parent_item'       => __( 'Parent Portfolio Category' ),
	  'parent_item_colon' => __( 'Parent Portfolio Category:' ),
	  'edit_item'         => __( 'Edit Portfolio Category' ), 
	  'update_item'       => __( 'Update Portfolio Category' ),
	  'add_new_item'      => __( 'Add New Portfolio Category' ),
	  'new_item_name'     => __( 'New Portfolio Category' ),
	  'menu_name'         => __( 'Portfolio Categories' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_ui' => true,
	  'update_count_callback' => '_update_post_term_count',
	  'query_var' => true,
	  'rewrite' => array( 'slug' => 'tag' ),

	);
	register_taxonomy( 'portfolio_category', 'portfolio', $args );
  }
  add_action( 'init', 'my_taxonomies_portfolio', 0 );


 


 /**Services c post type */
function my_custom_post_services() {
	$labels = array(
	  'name'               => _x( 'Service', 'post type general name' ),
	  'singular_name'      => _x( 'Services', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'services' ),
	  'add_new_item'       => __( 'Add New Service' ),
	  'edit_item'          => __( 'Edit Service' ),
	  'new_item'           => __( 'NewService' ),
	  'all_items'          => __( 'All Services' ),
	  'view_item'          => __( 'View Services' ),
	  'search_items'       => __( 'Search Services' ),
	  'not_found'          => __( 'No Services found' ),
	  'not_found_in_trash' => __( 'No Services found in the Trash' ), 
	  'parent_item_colon'  => '',
	  'query_var' 		   => 'services',
	  'menu_name'          => 'Services',

	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => '',
	  'public'        => true,
	  'menu_position' => 7,
	  'menu_icon'		   => 'dashicons-admin-generic',
	  'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	  'has_archive'   => true,
	);
	register_post_type( 'services', $args ); 
  }
  add_action( 'init', 'my_custom_post_services' ); 


  /**Services c post type */
function my_custom_post_about() {
	$labels = array(
	  'name'               => _x( 'About', 'post type general name' ),
	  'singular_name'      => _x( 'Abouts', 'post type singular name' ),
	  'add_new'            => _x( 'Add New', 'about' ),
	  'add_new_item'       => __( 'Add New About' ),
	  'edit_item'          => __( 'Edit About' ),
	  'new_item'           => __( 'New About' ),
	  'all_items'          => __( 'All About' ),
	  'view_item'          => __( 'View About' ),
	  'search_items'       => __( 'Search About' ),
	  'not_found'          => __( 'No Services found' ),
	  'not_found_in_trash' => __( 'No Services found in the Trash' ), 
	  'parent_item_colon'  => '',
	  'query_var' 		   => 'about',
	  'menu_name'          => 'About',

	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => '',
	  'public'        => true,
	  'menu_position' => 7,
	  'menu_icon'		   => 'dashicons-clipboard',
	  'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	  'has_archive'   => true,
	);
	register_post_type( 'about', $args ); 
  }
  add_action( 'init', 'my_custom_post_about' ); 

    /**Articles c post type */
function my_custom_post_article() {
	$labels = array(
	  'name'               => _x( 'Article', 'post type general name' ),
	  'singular_name'      => _x( 'Articles', 'post type singular name' ),
	  'add_new'            => _x( 'Add Article', 'article' ),
	  'add_new_item'       => __( 'Add New Article' ),
	  'edit_item'          => __( 'Edit Article' ),
	  'new_item'           => __( 'New Article' ),
	  'all_items'          => __( 'All Article' ),
	  'view_item'          => __( 'View Article' ),
	  'search_items'       => __( 'Search Article' ),
	  'not_found'          => __( 'No Articles found' ),
	  'not_found_in_trash' => __( 'No Articles found in the Trash' ), 
	  'parent_item_colon'  => '',
	  'query_var' 		   => 'article',
	  'menu_name'          => 'Article',

	);
	$args = array(
	  'labels'        => $labels,
	  'description'   => '',
	  'public'        => true,
	  'menu_position' => 7,
	  'menu_icon'		   => 'dashicons-format-aside',
	  'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
	  'has_archive'   => true,
	);
	register_post_type( 'article', $args ); 
  }
  add_action( 'init', 'my_custom_post_article' ); 

//Includes


//Action & Filter Hooks

function start_it_scripts() {

	wp_register_style( 'start-it-bootstrap', get_stylesheet_directory_uri() . '/inc/css/bootstrap.css');
	wp_enqueue_style('start-it-bootstrap');

	wp_register_style( 'start-it-animate', get_stylesheet_directory_uri() . '/inc/css/animate.css');
	wp_enqueue_style('start-it-animate');

	wp_register_style( 'start-it-menu', get_stylesheet_directory_uri() . '/inc/css/menu.css');
	wp_enqueue_style('start-it-menu');

	wp_register_style( 'start-css-owl', get_stylesheet_directory_uri() . '/inc/css/owl.carousel.css');
	wp_enqueue_style('start-css-owl');

	wp_register_style( 'start-css-fancybox', get_stylesheet_directory_uri() . '/inc/css/jquery.fancybox.css');
	wp_enqueue_style('start-css-fancybox');

	wp_register_style( 'start-it-style', get_stylesheet_directory_uri() . '/inc/css/style.css');
	wp_enqueue_style('start-it-style');

	wp_register_script( 'start-jquery', get_template_directory_uri() . '/inc/js/jquery-3.2.1.min.js', array(), '', true );
	wp_enqueue_script( 'start-jquery' );
	
	wp_register_script( 'start-bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'start-bootstrap' );

	wp_register_script( 'start-mixitup', get_template_directory_uri() . '/inc/js/jquery.mixitup.min.js', array(), '', true );
	wp_enqueue_script( 'start-mixitup' );

	wp_register_script( 'start-fancybox', get_template_directory_uri() . '/inc/js/jquery.fancybox.min.js', array(), '', true );
	wp_enqueue_script( 'start-fancybox' );
	
	wp_register_script( 'start-owl', get_template_directory_uri() . '/inc/js/owl.carousel.js', array(), '', true );
	wp_enqueue_script( 'start-owl' );

	wp_register_script( 'start-it-navigation', get_template_directory_uri() . '/inc/js/menu.js', array(), '', true );
	wp_enqueue_script( 'start-it-navigation' );

	wp_register_script( 'start-typed', get_template_directory_uri() . '/inc/js/typed.min.js', array(), '', true );
	wp_enqueue_script( 'start-typed' );

	wp_register_script( 'start-custom', get_template_directory_uri() . '/inc/js/custom.js', array(), '', true );
	wp_enqueue_script( 'start-custom' );

}
add_action( 'wp_enqueue_scripts', 'start_it_scripts' );

//Shortcuts




