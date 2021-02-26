<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   //wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css' );
   wp_enqueue_style( 'gridlex-style', get_stylesheet_directory_uri().'/assets/css/gridlex.min.css' );
   wp_enqueue_style( 'fontawesome-style', get_stylesheet_directory_uri().'/assets/font-awesome/css/font-awesome.min.css' );


   wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/custom.js', array ( 'jquery' ), 1.1, true);

}

?>