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

/**
 * Hero Banner Image
 */

function custom_theme_customize_register($wp_customize) {
    $wp_customize->add_section('background_section', array(
        'title' => __('Hero Banner Image', 'custom-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('my_custom_background_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'background_image_control', array(
        'label' => __('Upload Hero Banner Image', 'custom-theme'),
        'section' => 'background_section',
        'settings' => 'my_custom_background_image',
    )));

	// customizer options for hero card content
	$wp_customize->add_section('hero_card_section', array(
        'title' => __('Hero Card Content', 'custom-theme'),
        'priority' => 31, 
    ));
	
	
	$wp_customize->add_setting('hero_card_title', array(
		'default' => 'Limited Live Sale',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_setting('hero_card_percentage', array(
		'default' => 'XX%',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_setting('hero_card_discount_text', array(
		'default' => 'Discount on curated items',
		'sanitize_callback' => 'sanitize_text_field',
	));

	// controls for the settings
	$wp_customize->add_control('hero_card_title_control', array(
		'label' => __('Hero Card Title', 'custom-theme'),
		'section' => 'hero_card_section',
		'settings' => 'hero_card_title',
		'type' => 'text',
	));

	$wp_customize->add_control('hero_card_percentage_control', array(
		'label' => __('Hero Card Discount Percentage', 'custom-theme'),
		'section' => 'hero_card_section',
		'settings' => 'hero_card_percentage',
		'type' => 'text',
	));

	$wp_customize->add_control('hero_card_discount_text_control', array(
		'label' => __('Hero Card Discount Text', 'custom-theme'),
		'section' => 'hero_card_section',
		'settings' => 'hero_card_discount_text',
		'type' => 'text',
	));

}
add_action('customize_register', 'custom_theme_customize_register');

  