<?php
/**
 * Shambhala Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shambhala Twenty Twenty-Two
 */

// Define constants.
if ( ! defined( 'SHNL_TWENTYTWENTYTWO_ROOT' ) ) {
	define( 'SHNL_TWENTYTWENTYTWO_ROOT', dirname( __FILE__ ) );
}
if ( ! defined( 'SHNL_TWENTYTWENTYTWO_URL' ) ) {
	define( 'SHNL_TWENTYTWENTYTWO_URL', get_template_directory_uri() );
}

// The files.
require_once SHNL_TWENTYTWENTYTWO_ROOT . '/functions/functions-theme-setup.php';
require_once SHNL_TWENTYTWENTYTWO_ROOT . '/functions/functions-blocks.php';
require_once SHNL_TWENTYTWENTYTWO_ROOT . '/functions/functions-events.php';
