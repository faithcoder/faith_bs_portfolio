<?php 
include_once('inc/portfolio-custom-post.php');
include_once('inc/customizer-options.php');

function add_theme_scripts() {
	
	wp_enqueue_style( 'montserrat-font', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'lato-font', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/styles.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	// Enqueue my scripts.
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/scripts.js', true);

    wp_enqueue_script( 'main-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), null, true );
    wp_enqueue_script( 'sb', 'https://cdn.startbootstrap.com/sb-forms-latest.js', array(), null, true );
	
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function basic_functions(){
    add_theme_support('title-tag');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');

    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action('after_setup_theme', 'basic_functions');

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'header-menu' ) {
      // add the desired attributes:
	 
	   $atts['class'] = 'nav-link py-3 px-0 px-lg-3 rounded';
      
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

function add_custom_css_class_to_menu_item($classes, $item, $args, $depth) {
    // Check if the menu location matches the one you want to target
    if ($args->theme_location === 'header-menu') {
        // Add your custom CSS class to the existing classes
        $classes[] = 'nav-item mx-0 mx-lg-1';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_custom_css_class_to_menu_item', 10, 4);


