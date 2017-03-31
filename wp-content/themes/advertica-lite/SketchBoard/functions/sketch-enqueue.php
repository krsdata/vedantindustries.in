<?php
/***********************************************
*  ENQUQUE CSS AND JAVASCRIPT
************************************************/
//ENQUEUE JQUERY 
function advertica_lite_script_enqueqe() {
	global $advertica_shortname;
	if(!is_admin()) {
		wp_enqueue_script('advertica-lite-custom-js', get_template_directory_uri() .'/js/custom.js',array('jquery'),'1.0',1 );
		wp_enqueue_script('comment-reply');
	}

}
add_action('init', 'advertica_lite_script_enqueqe');

//ENQUEUE FRONT SCRIPTS
function advertica_lite_theme_stylesheet()
{

	$theme = wp_get_theme();

	global $is_IE;
	if($is_IE ) {
		wp_enqueue_style( 'advertica-lite-ie-style', get_template_directory_uri().'/css/ie-style.css', false, $theme->Version );
		wp_enqueue_style( 'advertica-lite-ie-awesome-stylesheet', get_template_directory_uri().'/css/font-awesome-ie7.css', false, $theme->Version );
	}

	wp_enqueue_script('hoverIntent');
	wp_enqueue_script('advertica-lite-superfish-js', get_template_directory_uri().'/js/superfish.js',array('jquery'),true,'1.0');
	wp_enqueue_script('advertica-lite-AnimatedHeader-js', get_template_directory_uri().'/js/cbpAnimatedHeader.js',array('jquery'),true,'1.0');
	wp_enqueue_script('advertica-lite-easing-js',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),'1.0',true);
	wp_enqueue_script('advertica-lite-waypoints-js',get_template_directory_uri().'/js/waypoints.min.js',array('jquery'),'1.0',true );
	
	wp_enqueue_style('advertica-lite-style', get_stylesheet_uri());
	wp_enqueue_style('advertica-lite-animation-stylesheet', get_template_directory_uri().'/css/skt-animation.css', false, $theme->Version);
	wp_enqueue_style('advertica-lite-awesome-stylesheet', get_template_directory_uri().'/css/font-awesome.min.css', false, $theme->Version);
	
	/*SUPERFISH*/
	wp_enqueue_style( 'advertica-lite-superfish-stylesheet', get_template_directory_uri().'/css/superfish.css', false, $theme->Version);
	wp_enqueue_style( 'advertica-lite-bootstrap-stylesheet', get_template_directory_uri().'/css/bootstrap-responsive.css', false, $theme->Version);

	// Google Fonts
	wp_enqueue_style('advertica-lite-googlefont-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,cyrillic,latin-ext,cyrillic-ext,vietnamese,greek-ext,greek');

}
add_action('wp_enqueue_scripts', 'advertica_lite_theme_stylesheet');

function advertica_lite_head() {
	
	if(!is_admin()) {
		require_once(get_template_directory().'/includes/advertica-custom-css.php');
	}
 
}
add_action('wp_head', 'advertica_lite_head');