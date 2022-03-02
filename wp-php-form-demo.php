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

add_shortcode( 'contact_form', 'cf_shortcode' );

?>