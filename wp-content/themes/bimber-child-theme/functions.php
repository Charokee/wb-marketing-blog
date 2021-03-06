<?php
// Prevent direct script access
if ( !defined( 'ABSPATH' ) )
	die ( 'No direct script access allowed' );

/**
* Child Theme Setup
*
* Always use child theme if you want to make some custom modifications.
* This way theme updates will be a lot easier.
*/
function bimber_child_setup() {}
add_action( 'after_setup_theme', 'bimber_child_setup' );

function google_fonts() {
	$query_args = array(
		'family' => 'Source+Sans+Pro:300,400,500,600,700',
		'subset' => 'latin,latin-ext'
	);
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}
            
add_action('wp_enqueue_scripts', 'google_fonts');

function custom_content_after_body_open_tag() {
	echo '<!-- Google Tag Manager (noscript) -->';
	echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT8WSW8"';
	echo 'height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>';
	echo '<!-- End Google Tag Manager (noscript) -->';
}
	
add_action('after_body_open_tag', 'custom_content_after_body_open_tag');