<?php

function add_stylesheets_and_scripts()
{
	// STYLES
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/dist/libr/css/bootstrap.css', array(), '4.4.1', 'all' );
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