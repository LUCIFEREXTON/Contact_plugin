<?php
/*
Plugin Name: Contact Form Plugin
Description: Simple non-bloated WordPress Contact Form
Version: 1.0
*/
defined( 'ABSPATH' ) ||	exit; // Exit if accessed directly

require 'wp-form.php';
require 'wp-deliver-mail.php';

function cf_shortcode() {
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style('stylesheet', plugin_dir_url(__FILE__).'style.css');
});
add_shortcode( 'contact_form', 'cf_shortcode' );

?>