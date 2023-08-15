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

	wp_enqueue_script( 'jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-carousel-script', get_stylesheet_directory_uri() . '/assets/owl_carousel/owl.carousel.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tto_scripts' );


/**
 * Add custom functions here
 */

 function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function register_category_item_post_type() {
	register_post_type('category_item',
	  array(
		'labels' => array(
		  'name' => 'Category Items',
		  'singular_name' => 'Category Item',
		),
		'public' => true,
		'supports' => array('title', 'thumbnail'),
	  )
	);
  }
  add_action('init', 'register_category_item_post_type');
  