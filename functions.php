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
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

     // Localize the script with image path
     $image_path = get_stylesheet_directory_uri() . '/assets/images/arrow-next.png';
     wp_localize_script('custom-js', 'customData', array('imagePath' => $image_path));

     $image_path2 = get_stylesheet_directory_uri() . '/assets/images/arrow-prev.png';
     wp_localize_script('custom-js', 'customData2', array('imagePath2' => $image_path2));

     
}
add_action( 'wp_enqueue_scripts', 'tto_scripts' );


/**
 * Add custom functions here
 */
// adding class to li in menus
 function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// adding custom post type for category section
function register_category_item_post_type() {
	register_post_type('category_item',
	  array(
		'labels' => array(
		  'name' => 'Product Category',
		  'singular_name' => 'Category Item',
		),
		'public' => true,
		'supports' => array('title', 'thumbnail'),
	  )
	);
  }
  add_action('init', 'register_category_item_post_type');

/**
 * Hero Banner Image and Card Content
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

// custom post type for products

function custom_register_product_post_type() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Product', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Products', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Product', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'product', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Product', 'your-text-domain' ),
        'new_item'           => __( 'New Product', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Product', 'your-text-domain' ),
        'view_item'          => __( 'View Product', 'your-text-domain' ),
        'all_items'          => __( 'All Products', 'your-text-domain' ),
        'search_items'       => __( 'Search Products', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Products:', 'your-text-domain' ),
        'not_found'          => __( 'No products found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No products found in Trash.', 'your-text-domain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'products' ), 
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ) ,
		'taxonomies' => array('category'),
    );

    register_post_type( 'product', $args );
}
add_action( 'init', 'custom_register_product_post_type' );

// footer-section
function customizer_footer_newsletter_section($wp_customize) {
    $wp_customize->add_section('footer_newsletter_section', array(
        'title' => 'Footer Newsletter',
        'priority' => 130,
    ));

    $wp_customize->add_setting('footer_newsletter_title', array(
        'default' => 'you’ve come so far.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_newsletter_title', array(
        'label' => 'Title',
        'section' => 'footer_newsletter_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('footer_newsletter_text', array(
        'default' => 'So why not join our crew of airsoft nutheads for monthly promotions, updates, and tips? Nothing can go wrong',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('footer_newsletter_text', array(
        'label' => 'Text',
        'section' => 'footer_newsletter_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'customizer_footer_newsletter_section');


function customizer_footer_section($wp_customize) {
    $wp_customize->add_section('footer_section', array(
        'title' => 'Footer Settings',
        'priority' => 120,
    ));

    // footer-2
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => 'Footer Logo',
        'section' => 'footer_section',
        'settings' => 'footer_logo',
    )));
    
    $wp_customize->add_setting('footer_social_twitter', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_setting('footer_social_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_setting('footer_social_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_setting('footer_social_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('footer_social_twitter', array(
        'label' => 'Twitter URL',
        'section' => 'footer_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_social_facebook', array(
        'label' => 'Facebook URL',
        'section' => 'footer_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_social_instagram', array(
        'label' => 'Instagram URL',
        'section' => 'footer_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('footer_social_youtube', array(
        'label' => 'Youtube URL',
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // footer-3 section 

    $wp_customize->add_setting('footer_copyright_text', array(
        'default' => '© 2023, luxurywithluv. Powered by Shopify',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label' => 'Copyright Text',
        'section' => 'footer_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'customizer_footer_section');