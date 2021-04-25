<?php

// Register Custom Navigation Walker
require_once 'class-wp-bootstrap-navwalker.php';

// CONFIG
/* Enable support for custom logo. */
	add_theme_support( 'custom-logo', array(
		'height'      => 400,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
	) );


register_nav_menus( array(
	'primary' => __( 'Primary Menu Top', 'nikolink' ),
) );


// Register thumbnails
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 385, 302 ); // Soft Crop Mode

//add option page to panel (ACF)
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_page('Footer');
}


// JAVASCRIPT & CSS
function add_stylesheets_and_scripts()
{
	// STYLES
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/src/bootstrap/bootstrap.css', array());
	wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap'), filemtime(get_template_directory() . '/style.css'), 'all' );
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/dist/css/main.min.css', array('style'), filemtime(get_template_directory() . '/assets/dist/css/main.min.css'), 'all' );
	wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick/slick.css', array());
	wp_enqueue_style('slick', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array());

	// SCRIPTS
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/src/js/libr/jquery.min.js');
	// wp_enqueue_script('popper',  get_template_directory_uri() . '/assets/src/js/libr/popper.min.js', array('jquery'));
	wp_enqueue_script('bootstrap',  get_template_directory_uri() . '/assets/src/js/libr/bootstrap.min.js', array());

	wp_enqueue_script('slick',  get_template_directory_uri() . '/plugins/slick/slick.min.js', array());

	// gather together all libraries in one file with gulp
	// wp_enqueue_script('jslibraries',  get_template_directory_uri() . '/assets/dist/libr/js/libr.min.js', array());

	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/src/js/custom/main.js', array());

	// add scripts on specific webpages
	// global $template;

	// if ( ( basename( $template ) === 'page-home.php' ) ) {
    // wp_enqueue_script('counting', get_template_directory_uri() . '/assets/src/js/countsAnimation.js', array(), null, true);
	// }
	
}
add_action('wp_enqueue_scripts', 'add_stylesheets_and_scripts'); 

add_filter('doing_it_wrong_trigger_error', function () {return false;}, 10, 0);
?>