<?php

// Utilities
// include( 'configure/utilities.php' );

// CONFIG
include( 'configure/configure.php' );

// JAVASCRIPT & CSS
include( 'configure/js-css-fonts.php' ); 

// Woocommerce
include( 'configure/woocommerce-custom.php' );

// Register Custom Navigation Walker
require_once 'configure/class-wp-bootstrap-navwalker.php';

?>