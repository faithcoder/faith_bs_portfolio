<?php


function hello_customizer($wp_customize){

	
	//Theme Settings Panel
	$wp_customize->add_panel( 'menus', array(
		'title' => __( 'Theme Settings' ),
		'description' => "hello", // Include html tags such as <p>.
		'priority' => 10, // Mixed with top-level-section hierarchy.
	) );
	
	
	$wp_customize->add_section('banner_section', array(
		'title' => __('Banner Section', 'faith_bs_portfolio'),
		'priority' => 10,
		'panel' => 'menus'
	));

	$wp_customize->add_setting('banner_heading', array(
		'default' => __('Hello World'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('banner-heading-control',
	array(
		'label' => __('Write Heading', 'faith_bs_portfolio'),
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
		'label' => __('Write Sub Heading', 'faith_bs_portfolio'),
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
		'title' => __('About Section', 'faith_bs_portfolio'),
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
		'label' => __('About Heading', 'faith_bs_portfolio'),
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
		'label' => __('About Left Side Text', 'faith_bs_portfolio'),
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
		'label' => __('About Right Side Text', 'faith_bs_portfolio'),
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
		'label' => __('About Button Text', 'faith_bs_portfolio'),
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
		'label' => __('About Button URL', 'faith_bs_portfolio'),
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



	//Footer SECTION
	$wp_customize->add_section('footer_section', array(
		'title' => __('Footer Section', 'faith_bs_portfolio'),
		'priority' => 15,
		'panel' => 'menus'
	));
	//location controller
	$wp_customize->add_setting('address_title', array(
		'default' => __('Location'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer-location-title',
	array(
		'label' => __('Footer Location Title', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'address_title',
		'section' => 'footer_section',
	));
	//address controller
	$wp_customize->add_setting('address_desc', array(
		'default' => __('address details'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('address_desc_control',
	array(
		'label' => __('Write your Address', 'faith_bs_portfolio'),
		'type' => 'textarea',
		'settings' => 'address_desc',
		'section' => 'footer_section',
	));
	//Footer about Title controller
	$wp_customize->add_setting('footer_about_title', array(
		'default' => __('Location'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_about_title_control',
	array(
		'label' => __('Footer About Title', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'footer_about_title',
		'section' => 'footer_section',
	));
	//address controller
	$wp_customize->add_setting('footer_about_desc', array(
		'default' => __('address details'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_about_desc_control',
	array(
		'label' => __('Footer About Details', 'faith_bs_portfolio'),
		'type' => 'textarea',
		'settings' => 'footer_about_desc',
		'section' => 'footer_section',
	));

	//social icon controller one
	$wp_customize->add_setting('footer_social_icons_one', array(
		'default' => __(''),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control',
	array(
		'label' => __('Facebook Icon', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'footer_social_icons_one',
		'section' => 'footer_section',
	));
	//social icon controller one URL
	$wp_customize->add_setting('footer_social_icons_one_url', array(
		'default' => __(''),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_url',
	array(
		'label' => __('Facebook URL', 'faith_bs_portfolio'),
		'type' => 'url',
		'settings' => 'footer_social_icons_one_url',
		'section' => 'footer_section',
	));
	//social icon controller two
	$wp_customize->add_setting('footer_social_icons_two', array(
		'default' => __('fa-brands fa-twitter'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_two',
	array(
		'label' => __('Twitter', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'footer_social_icons_two',
		'section' => 'footer_section',
	));

    //social icon controller two URL
	$wp_customize->add_setting('footer_social_icons_two_url', array(
		'default' => __(''),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_two_url',
	array(
		'label' => __('Twitter URL', 'faith_bs_portfolio'),
		'type' => 'url',
		'settings' => 'footer_social_icons_two_url',
		'section' => 'footer_section',
	));

	//social icon controller three
	$wp_customize->add_setting('footer_social_icons_three', array(
		'default' => __('fa-brands fa-instagram'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_three',
	array(
		'label' => __('Instagram', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'footer_social_icons_three',
		'section' => 'footer_section',
	));


    //social icon controller two URL
	$wp_customize->add_setting('footer_social_icons_three_url', array(
		'default' => __(''),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_three_url',
	array(
		'label' => __('Instagram URL', 'faith_bs_portfolio'),
		'type' => 'url',
		'settings' => 'footer_social_icons_three_url',
		'section' => 'footer_section',
	));
	//social icon controller four
	$wp_customize->add_setting('footer_social_icons_four', array(
		'default' => __('fa-brands fa-linkedin'),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_four',
	array(
		'label' => __('LinkedIn', 'faith_bs_portfolio'),
		'type' => 'text',
		'settings' => 'footer_social_icons_four',
		'section' => 'footer_section',
	));

    //social icon controller two URL
	$wp_customize->add_setting('footer_social_icons_four_url', array(
		'default' => __(''),
		'transport' => 'postMessage',
	));
	
	$wp_customize->add_control('footer_icon_control_four_url',
	array(
		'label' => __('LinkedIn URL', 'faith_bs_portfolio'),
		'type' => 'url',
		'settings' => 'footer_social_icons_four_url',
		'section' => 'footer_section',
	));
	//Style Settings
	$wp_customize->add_section('style_settings', array(
		'title' => __('Style Settings', 'faith_bs_portfolio'),
		'priority' => 16,
		'panel' => 'menus'
	));
	//Primary BG Color
	$wp_customize->add_setting('section_bg_color', array(
        'default' => '#e67e22', // Default color
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'section_bg_color', array(
        'label' => __('Section Background Color', 'your-theme-text-domain'),
        'section' => 'style_settings',
    )));

	//Primary Color
	$wp_customize->add_setting('section_color', array(
        'default' => '#d35400', // Default color
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'section_color', array(
        'label' => __('Site Primary Color', 'your-theme-text-domain'),
        'section' => 'style_settings',
    )));

}

add_action('customize_register', 'hello_customizer');

function theme_custom_css() {
    $primary_color = get_theme_mod('primary_color', '#666666'); // Get the custom color or use the default if not set.
    $primary_bg_color = get_theme_mod('primary_bg_color', '#dddddd'); // Get the custom color or use the default if not set.
    $button_border_color = get_theme_mod('button_border_color', '#e5e5e5'); // Get the custom color or use the default if not set.
    $section_bg_color = get_theme_mod('section_bg_color', '#e67e22'); // Get the custom color or use the default if not set.
    $section_color = get_theme_mod('section_color', '#d35400'); // Get the custom color or use the default if not set.

    echo '<style type="text/css">
        /* CSS rules that use the custom color */
        a.btn.btn-xl {
            color: ' . esc_attr($primary_color) . ';
            background-color: ' . esc_attr($primary_bg_color) . ';
            border: 3px solid' . esc_attr($button_border_color) . ';
        }

        header.masthead, #about{
            background-color: ' . esc_attr($section_bg_color) . ';			
        }

		button, a {
			color: ' . esc_attr($section_color) . ';
		}

    </style>';
}
add_action('wp_head', 'theme_custom_css');