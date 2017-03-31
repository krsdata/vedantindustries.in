<?php

function advertica_lite_customize_register( $wp_customize ) {

	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	// Do stuff with $wp_customize, the WP_Customize_Manager object.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->remove_control('header_textcolor');
	
	// ====================================
	// = Advertica Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'home_page_settings', array(
		'title' => __( 'Home Page Settings', 'advertica-lite'),
		'priority' => 10,
		'active_callback' => 'is_front_page'
	) );

	// ====================================
	// = Advertica Lite Theme Sections
	// ====================================
	
	// Home Page
	$wp_customize->add_section( 'home_featured_section' , array(
		'title' => __('Home Featured Box','advertica-lite'),
		'panel' => 'home_page_settings',
	) );
	$wp_customize->add_section( 'home_parallax_section' , array(
		'title' => __('Home Parallax','advertica-lite'),
		'panel' => 'home_page_settings',
	) );
	$wp_customize->add_section( 'home_blogs_section' , array(
		'title' => __('Home Blogs','advertica-lite'),
		'panel' => 'home_page_settings',
	) );
	$wp_customize->add_section( 'home_clients_section' , array(
		'title' => __('Home Clients Logo','advertica-lite'),
		'panel' => 'home_page_settings',
	) );

	// Breadcrumb
	$wp_customize->add_section( 'breadcrumb_settings' , array(
		'title' => __('Breadcrumb Settings','advertica-lite'),
	) );
	
	// Footer
	$wp_customize->add_section( 'footer_settings' , array(
		'title' => __('Footer Settings','advertica-lite'),
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	
	// Theme Color
	$wp_customize->add_setting( 'advertica_lite_pri_color', array(
		'default'           => '#FFA500' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advertica_lite_pri_color', array(
		'label'       => __( 'Choose Theme Color', 'advertica-lite' ),
		'section'     => 'colors',
	) ) );

	// Logo Image
	$wp_customize->add_setting( 'advertica_lite_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, 'advertica_lite_logo_img', array(
		'priority' => 1,
		'label' => __( 'Logo Image', 'advertica-lite' ),
		'section' => 'title_tagline',
		'mime_type' => 'image',
	) ) );

	// ====================================
	// =  Home Featured Section
	// ====================================
	// First Featured Box
	$wp_customize->add_setting( 'first_feature_heading', array(
		'default'        => __('Business Strategy', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('first_feature_heading', array(
		'label' => __('First Featured Box Heading','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'first_feature_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_feature_image', array(
		'label' => __( 'First Featured Box Image', 'advertica-lite' ),
		'section' => 'home_featured_section',
		
	) ) );
	$wp_customize->add_setting( 'first_feature_content', array(
		'default'        => __('Get focused from your target consumers and increase your business with Web portal Design and Development.', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('first_feature_content', array(
		'type' => 'textarea',
		'label' => __('First Featured Box Content','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'first_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('first_feature_link', array(
		'type' => 'url',
		'label' => __('First Featured Box Link','advertica-lite'),
		'section' => 'home_featured_section',
		
	));

	// Second Featured Box
	$wp_customize->add_setting( 'second_feature_heading', array(
		'default'        => __('Quality Products', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('second_feature_heading', array(
		'label' => __('Second Featured Box Heading','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'second_feature_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_feature_image', array(
		'label' => __( 'Second Featured Box Image', 'advertica-lite' ),
		'section' => 'home_featured_section',
		
	) ) );
	$wp_customize->add_setting( 'second_feature_content', array(
		'default'        => __('Products with the ultimate features and functionality that provide the complete satisfaction to the clients.', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('second_feature_content', array(
		'type' => 'textarea',
		'label' => __('Second Featured Box Content','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'second_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('second_feature_link', array(
		'type' => 'url',
		'label' => __('Second Featured Box Link','advertica-lite'),
		'section' => 'home_featured_section',
		
	));

	// Third Featured Box
	$wp_customize->add_setting( 'third_feature_heading', array(
		'default'        => __('Best Business Plans', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('third_feature_heading', array(
		'label' => __('Third Featured Box Heading','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'third_feature_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'third_feature_image', array(
		'label' => __( 'Third Featured Box Image', 'advertica-lite' ),
		'section' => 'home_featured_section',
		
	) ) );
	$wp_customize->add_setting( 'third_feature_content', array(
		'default'        => __('Based on the client requirement, different business plans suits and fulfill your business and cost requirement.', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('third_feature_content', array(
		'type' => 'textarea',
		'label' => __('Third Featured Box Content','advertica-lite'),
		'section' => 'home_featured_section',
		
	));
	$wp_customize->add_setting( 'third_feature_link', array(
		'default'        => '#',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control('third_feature_link', array(
		'type' => 'url',
		'label' => __('Third Featured Box Link','advertica-lite'),
		'section' => 'home_featured_section',
		
	));

	// ====================================
	// =  Home Parallax Section
	// ====================================
	$wp_customize->add_setting( 'parallax_image', array(
		'default'           => $imagepath.'Parallax_Section_Image.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'parallax_image', array(
		'label' => __( 'Home Parallax Image', 'advertica-lite' ),
		'section' => 'home_parallax_section',
	) ) );
	$wp_customize->add_setting( 'parallax_content', array(
		'default'        => '<div class="skt-awesome-section"><div class="skt-awesome-title">'.__('Awesome Parallax Section', 'advertica-lite').'</div><div class="skt-awesome-desp">'.__('Advertica features an amazing parallax section', 'advertica-lite').'</div></div>',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('parallax_content', array(
		'type' => 'textarea',
		'label' => __('Home Parallax Content','advertica-lite'),
		'section' => 'home_parallax_section',
	));

	// ====================================
	// =  Home Blog Section
	// ====================================
	$wp_customize->add_setting( 'home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'advertica_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_blog_sec', array(
		'label' => __( 'Home Blogs ON/OFF', 'advertica-lite' ),
		'section' => 'home_blogs_section',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'home_blog_title', array(
		'default'        => __('Latest News', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_title', array(
		'label' => __('Home Blogs Title','advertica-lite'),
		'section' => 'home_blogs_section',
	));

	$wp_customize->add_setting( 'home_blog_num', array(
		'default'        => __('6', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_num', array(
		'label' => __('Number Of Blogs','advertica-lite'),
		'section' => 'home_blogs_section',
	));
	// ====================================
	// =  Home Clients Section
	// ====================================
	$wp_customize->add_setting( 'home_brand_sec_title', array(
		'default'        => __('Our Partners', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_brand_sec_title', array(
		'label' => __('Client Section Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	// First Client Settings
	$wp_customize->add_setting( 'brand1_alt', array(
		'default'        => __('First Client Name', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand1_alt', array(
		'label' => __('First Client Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand1_url', array(
		'default'        => '#',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand1_url', array(
		'label' => __('First Client Link','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand1_img', array(
		'default'           => $imagepath.'client-logo1.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand1_img', array(
		'label' => __( 'First Client Logo Image', 'advertica-lite' ),
		'section' => 'home_clients_section',
		
	) ) );
	// Second Client Settings
	$wp_customize->add_setting( 'brand2_alt', array(
		'default'        => __('Second Client Name', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand2_alt', array(
		'label' => __('Second Client Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand2_url', array(
		'default'        => '#',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand2_url', array(
		'label' => __('Second Client Link','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand2_img', array(
		'default'           => $imagepath.'client-logo2.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand2_img', array(
		'label' => __( 'Second Client Logo Image', 'advertica-lite' ),
		'section' => 'home_clients_section',
		
	) ) );
	// Third Client Settings
	$wp_customize->add_setting( 'brand3_alt', array(
		'default'        => __('Third Client Name', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand3_alt', array(
		'label' => __('Third Client Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand3_url', array(
		'default'        => '#',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand3_url', array(
		'label' => __('Third Client Link','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand3_img', array(
		'default'           => $imagepath.'client-logo3.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand3_img', array(
		'label' => __( 'Third Client Logo Image', 'advertica-lite' ),
		'section' => 'home_clients_section',
		
	) ) );
	// Fourth Client Settings
	$wp_customize->add_setting( 'brand4_alt', array(
		'default'        => __('Fourth Client Name', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand4_alt', array(
		'label' => __('Fourth Client Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand4_url', array(
		'default'        => '#',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand4_url', array(
		'label' => __('Fourth Client Link','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand4_img', array(
		'default'           => $imagepath.'client-logo4.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand4_img', array(
		'label' => __( 'Fourth Client Logo Image', 'advertica-lite' ),
		'section' => 'home_clients_section',
		
	) ) );
	// Fifth Client Settings
	$wp_customize->add_setting( 'brand5_alt', array(
		'default'        => __('Fifth Client Name', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand5_alt', array(
		'label' => __('Fifth Client Title','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand5_url', array(
		'default'        => '#',
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('brand5_url', array(
		'label' => __('Fifth Client Link','advertica-lite'),
		'section' => 'home_clients_section',
		
	));
	$wp_customize->add_setting( 'brand5_img', array(
		'default'           => $imagepath.'client-logo5.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand5_img', array(
		'label' => __( 'Fifth Client Logo Image', 'advertica-lite' ),
		'section' => 'home_clients_section',
		
	) ) );

	// ====================================
	// = Blog Page Settings
	// ====================================
	$wp_customize->add_setting( 'blogpage_heading', array(
		'default'        => __('Blog', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
	));
	$wp_customize->add_control('blogpage_heading', array(
		'label' => __('Posts page Title','advertica-lite'),
		'section' => 'static_front_page',
	));

	// ====================================
	// = Breadcrumb Settings Sections
	// ====================================
	$wp_customize->add_setting( 'breadcrumb_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'advertica_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'breadcrumb_sec', array(
		'label' => __( 'Breadcrumb Section ON/OFF', 'advertica-lite' ),
		'section' => 'breadcrumb_settings',
		'type' => 'radio',
		'choices' => array(
			'on' =>'ON',
			'off'=> 'OFF'
		),
	) );
	$wp_customize->add_setting( 'breadcrumbtxt_color', array(
		'default'           => '#222222',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbtxt_color', array(
		'label'       => __( 'Breadcrumb Text Color', 'advertica-lite' ),
		'section'     => 'breadcrumb_settings',
		'active_callback' => 'advertica_lite_active_breadcrumb_section'
	) ) );
	$wp_customize->add_setting( 'breadcrumbbg_color', array(
		'default'           => '#F2F2F2',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbbg_color', array(
		'label'       => __( 'Breadcrumb Background Color', 'advertica-lite' ),
		'section'     => 'breadcrumb_settings',
		'active_callback' => 'advertica_lite_active_breadcrumb_section'
	) ) );
	$wp_customize->add_setting( 'breadcrumbbg_image', array(
		'default'        => $imagepath.'page-title-bg.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'breadcrumbbg_image', array(
		'label' => __( 'Breadcrumb Background Image', 'advertica-lite' ),
		'description' => __( 'size: 1600px by 180px', 'advertica-lite' ),
		'section' => 'breadcrumb_settings',
		'active_callback' => 'advertica_lite_active_breadcrumb_section'
	) ) );

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( 'copyright', array(
		'default'        => __('Proudly Powered by WordPress', 'advertica-lite'),
		'sanitize_callback' => 'advertica_lite_sanitize_textarea',
		'transport' => 'postMessage',
	));
	$wp_customize->add_control('copyright', array(
		'label' => __('Copyright Text','advertica-lite'),
		'description' => __('You can use HTML for links etc..', 'advertica-lite'),
		'section' => 'footer_settings',
	));

}
add_action( 'customize_register', 'advertica_lite_customize_register' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Advertica Lite 1.0
 */
function advertica_lite_customize_preview_js() {
	wp_enqueue_script( 'advertica-lite-customizer-js', get_template_directory_uri() . '/js/advertica-lite-customizer.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'advertica_lite_customize_preview_js' );


// sanitize textarea
function advertica_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

// sanitize on-off
function advertica_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' =>'ON',
		'off'=> 'OFF'
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// active callback breadcrumb section
function advertica_lite_active_breadcrumb_section( $control ) {
	if ( $control->manager->get_setting('breadcrumb_sec')->value() == 'on' ) {
		return true;
	} else {
		return false;
	}
}

?>