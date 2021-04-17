<?php
/* Enable support for custom logo. */

	add_theme_support( 'custom-logo', array(
		'height'      => 400,
		'width'       => 100,
		'flex-height' => true,
		'flex-width'  => true,
	) );


register_nav_menus( array(
	'primary_top' => __( 'Primary Menu Top', 'maleo' ),
	'primary_bottom' => __( 'Primary Menu Bottom', 'maleo' ),
) );



function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// Register thumbnails
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'homepage-thumb', 385, 302 ); // Soft Crop Mode

//add option page to panel (ACF)
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_page('Stopka');
}
?>