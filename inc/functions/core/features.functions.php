<?php

/*
 * Add Features to Our Theme
 */
function asdc_theme_setup() {

	/*
	 * Add Custom Menus Support and Register the Menus Locations
	 */
	add_theme_support('menus');
	register_nav_menu('primary','Primary Header Navigation');
	register_nav_menu('secondary','Footer Navigation');

	/*
	 * Add Post Thumbnail (Featured Image) Support
	 */
	add_theme_support('post-thumbnails');
	// Featured Images Sizes
	add_image_size('single-image',1366,600,array('center','center'));
	add_image_size('banner-image',1366,400,array('center','center'));
	add_image_size('vue-image',300,180,array('center','center'));

	/*
	 * Add Custom Header Support
	 */
	$args = array(
		'width'         => 980,
		'height'        => 180,
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
	);
	add_theme_support( 'custom-header', $args );

	/*
	 * Add Posts Formats Support
	 */
	add_theme_support('post-formats', array('aside','image','video'));

	/*
	 * Add HTML 5 Support
	 */
	add_theme_support('html5', array('search-form'));

}

add_action('init','asdc_theme_setup');

class theme {

	public function __construct() {
		if ( version_compare( $GLOBALS['wp_version'], '4.8.0', '<' ) ) {
			wp_die( __( $this->br_system_error( 'Tema Incompatível', 'Versão de sistema incompatível com o tema.<br>Atualize o sistema e tente novamente' ) ) );
		}
		define('tDir',get_template_directory_uri());
		define('taDir',get_template_directory());
		$f = new functions();
		$f->call( 'assets', 'core' );
		$f->call( 'options', 'core' );
		$f->call( 'layout', 'core' );

		return true;
	}

	function loader($c=null)
	{
		if($c!=''||$c!=null){if(c_name===p_name_r){if(pr_a==$c){return true;}}}return false;
	}

	function br_system_error($title,$message)
	{
		$logo = '<span style="display:block;text-align:center;margin-top:50px;"><img src="'. get_template_directory_uri() . base64_decode('L2Fzc2V0cy9pbWFnZXMvYnJhbmQvbG9nby1hZHYuc3Zn') . '" width="300"/></span><br/>';
		$title = '<h2 style="text-align:center;margin:10px 0 0 0 !important;padding:0 !important;">'. $title .'</h2>';
		$message = '<p style="color=grey;text-align:center;">'. $message .'</p>';
		return $logo . $title . $message;
	}

	function _d($string)
	{
		die($string);
	}

}

function mytheme_sanitize_header()
{
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'custom_disable_emojis_tinymce' );

	// Default Functions Remove
	add_filter('show_admin_bar', '__return_false');
	remove_action('wp_head', 'wp_generator');
	remove_action ('wp_head', 'rsd_link');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');

}

function custom_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

function td($uri = true){
	if($uri){
		echo tDir;
	}else{
		echo taDir;
	}
}