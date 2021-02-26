<?php
/**
 * scripts.php
 * @since Version 1.0.0
*/
if (file_exists( dirname( __FILE__ ) . '/includes/theme-scripts.php' ) ) {
require_once(trailingslashit(get_stylesheet_directory()).'/includes/theme-scripts.php');
}

/**
 * shortcode.php
 * @since Version 1.0.0
*/
if (file_exists( dirname( __FILE__ ) . '/includes/theme-shortcode.php' ) ) {
require_once(trailingslashit(get_stylesheet_directory()).'/includes/theme-shortcode.php');
}

/**
 * theme-helper.php
 * @since Version 1.0.0
*/
if (file_exists( dirname( __FILE__ ) . '/includes/theme-helper.php' ) ) {
require_once(trailingslashit(get_stylesheet_directory()).'/includes/theme-helper.php');
}
?>
