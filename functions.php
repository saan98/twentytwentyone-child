<?php
/**
 * Enqueue child styles.
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/style.css', array(), 100 );
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' ); // Remove the // from the beginning of this line if you want the child theme style.css file to load on the front end of your site.

function tto_scripts() {
	wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri(). '/assets/css/mystyle.css' );
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri(). '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl-carousel-css', get_stylesheet_directory_uri(). '/assets/owl_carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl-theme-default-css', get_stylesheet_directory_uri(). '/assets/owl_carousel/owl.theme.default.css' );

	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-script', get_stylesheet_directory_uri() . '/assets/owl_carousel/owl.carousel.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tto_scripts' );


/**
 * Add custom functions here
 */