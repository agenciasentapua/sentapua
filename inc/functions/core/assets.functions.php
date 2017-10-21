<?php

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

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_template_directory_uri() .'/favicon.png" />';
}

add_action('init','mytheme_sanitize_header');
add_action('wp_head','blog_favicon');