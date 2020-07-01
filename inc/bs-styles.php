<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function wc_estore_scripts() {
	wp_enqueue_style( 'wc-estore-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wc-estore-style', 'rtl', 'replace' );
	wp_enqueue_script( 'wc-estore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wc_estore_scripts' );
