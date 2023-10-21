<?php 


include_once('inc/portfolio-custom-post.php');

function add_theme_scripts() {
	
	wp_enqueue_style( 'montserrat-font', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'lato-font', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' );
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


function hello_customizer($wp_customize){

	
	//Theme Settings Panel
	$wp_customize->add_panel( 'menus', array(
		'title' => __( 'Theme Settings' ),
		'description' => "hello", // Include html tags such as <p>.
		'priority' => 160, // Mixed with top-level-section hierarchy.
	) );
	
	
	$wp_customize->add_section('banner_section', array(
		'title' => __('Banner Section', 'b255'),
		'priority' => 10,
		'panel' => 'menus'
	));

	$wp_customize->add_setting('banner_heading', array(
		'default' => __('Hello World'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('banner-heading-control',
	array(
		'label' => __('Write Heading', 'b255'),
		'type' => 'text',
		'settings' => 'banner_heading',
		'section' => 'banner_section',
	));

	$wp_customize->add_setting('banner_subheading', 
	array(
		'default' => __('amader text area'),
	));
	
			
	$wp_customize->add_control('banner-text-control',
	array(
		'label' => __('Write Sub Heading', 'b255'),
		'type' => 'textarea',
		'settings' => 'banner_subheading',
		'section' => 'banner_section',
	));

	$wp_customize->add_setting('banner_image', array(
	'default' => __(''),
	));

	$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize,'banner-img-control',
		array(
			'label' => __( 'Upload a Banner Image', 'theme_name' ),
			'section' => 'banner_section',
			'settings' => 'banner_image',
			'context' => 'your_setting_context'
			)
		));

	//ABOUT SECTION
	$wp_customize->add_section('about_section', array(
		'title' => __('About Section', 'b255'),
		'priority' => 10,
		'panel' => 'menus'
	));
	//header controller
	$wp_customize->add_setting('about_heading', array(
		'default' => __('About Us'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('about-heading-control',
	array(
		'label' => __('About Heading', 'b255'),
		'type' => 'text',
		'settings' => 'about_heading',
		'section' => 'about_section',
	));


	//left side text controller
	$wp_customize->add_setting('left_side_text', array(
		'default' => __('Freelancer is a free bootstrap theme created by Start Bootstrap.'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('left_side_text_control',
	array(
		'label' => __('About Left Side Text', 'b255'),
		'type' => 'textarea',
		'settings' => 'left_side_text',
		'section' => 'about_section',
	));

	//right side text controller
	$wp_customize->add_setting('right_side_text', array(
		'default' => __('Freelancer is a free bootstrap theme created by Start Bootstrap.'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('right_side_text_control',
	array(
		'label' => __('About Right Side Text', 'b255'),
		'type' => 'textarea',
		'settings' => 'right_side_text',
		'section' => 'about_section',
	));


	//About Section Button controller
	$wp_customize->add_setting('about_button_text', array(
		'default' => __('Free Download'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('about_button_text_control',
	array(
		'label' => __('About Button Text', 'b255'),
		'type' => 'text',
		'settings' => 'about_button_text',
		'section' => 'about_section',
	));
	//About Button URL controller
	$wp_customize->add_setting('about_button_url', array(
		'default' => __('#'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('about_button_url_control',
	array(
		'label' => __('About Button URL', 'b255'),
		'type' => 'url',
		'settings' => 'about_button_url',
		'section' => 'about_section',
	));

	//about button text color control
	$wp_customize->add_setting('primary_color', array(
        'default' => '#ff0000', // Default color
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Button Text Color', 'your-theme-text-domain'),
        'section' => 'about_section',
    )));
	//primary_bg_color
	$wp_customize->add_setting('primary_bg_color', array(
        'default' => '#ff0000', // Default color
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_bg_color', array(
        'label' => __('Button Background Color', 'your-theme-text-domain'),
        'section' => 'about_section',
    )));
	//button_border_color
	$wp_customize->add_setting('button_border_color', array(
        'default' => '#ff0000', // Default color
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_border_color', array(
        'label' => __('Button border Color', 'your-theme-text-domain'),
        'section' => 'about_section',
    )));
}

add_action('customize_register', 'hello_customizer');


function theme_custom_css() {
    $primary_color = get_theme_mod('primary_color', '#666666'); // Get the custom color or use the default if not set.
    $primary_bg_color = get_theme_mod('primary_bg_color', '#dddddd'); // Get the custom color or use the default if not set.
    $button_border_color = get_theme_mod('button_border_color', '#e5e5e5'); // Get the custom color or use the default if not set.

    echo '<style type="text/css">
        /* CSS rules that use the custom color */
        a.btn.btn-xl {
            color: ' . esc_attr($primary_color) . ';
            background-color: ' . esc_attr($primary_bg_color) . ';
            border: 3px solid' . esc_attr($button_border_color) . ';
        }
    </style>';
}
add_action('wp_head', 'theme_custom_css');
