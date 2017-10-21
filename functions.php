<?php
/*
 * #######################
 * Awesome Theme Functions
 * #######################
 */


define( "ASSETS", get_template_directory_uri() . '/assets/');

/*
 * Add Assets to Our Theme
 */

function asdc_script_enqueue() {

	wp_deregister_script('jquery');

	// Styles
	wp_enqueue_style('asdc-style', ASSETS . 'css/app.min.css',array(),'1.0.1-alpha','all');

	// Scripts
	wp_enqueue_script('asdc-jquery', ASSETS . 'js/jquery.min.js',array(),'3.2.1',true);
	wp_enqueue_script('asdc-bootstrap', ASSETS . 'js/bootstrap.min.js',array(),'3.3.7',true);
	wp_enqueue_script('asdc-fontawesome','https://use.fontawesome.com/147af5035b.js',array(),'4.4.7',true);
	wp_enqueue_script('asdc-app',ASSETS . 'js/app.js',array('asdc-jquery','asdc-bootstrap'),'1.0.1-alpha',true);
}

add_action('wp_enqueue_scripts','asdc_script_enqueue');

/*
 * Add Features to Our Theme
 */
function awesome_theme_setup() {

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

add_action('init','awesome_theme_setup');