<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function wc_estore_scripts() {
	wp_enqueue_style( 'wc-estore-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wc-bootrtrap-style', get_template_directory_uri().'/assets/css/bootstrap.css', array('woocommerce-general'), null );
	wp_enqueue_style( 'wc-fasthover-style', get_template_directory_uri().'/assets/css/fasthover.css', array('woocommerce-general'), null );
	wp_enqueue_style( 'wc-popuo-box-style', get_template_directory_uri().'/assets/css/popuo-box.css', array('woocommerce-general'), null );
	wp_enqueue_style( 'wc-font-awesome-style', get_template_directory_uri().'/assets/css/font-awesome.css', array('woocommerce-general'), null );
	wp_enqueue_style( 'wc-jquery.countdown-style', get_template_directory_uri().'/assets/css/jquery.countdown.css', array('woocommerce-general'), null );
	wp_enqueue_style( 'wc-style-style', get_template_directory_uri() . '/assets/css/style.css', array( 'woocommerce-general' ), null );
	wp_style_add_data( 'wc-estore-style', 'rtl', 'replace' );
	wp_enqueue_script( 'wc-estore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'wc-estore-bootstrap-3.1.1.min-js', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-easyResponsiveTabs-js', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-jquery.flexisel-js', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-minicart-js', get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-bootstrap-3.1.1.min-js', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-jquery.wmuSlider-js', get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-jquery.magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-jquery.countdown-js', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-script-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'wc-estore-ajax-search-js', get_template_directory_uri() . '/assets/js/ajax-search.js', array( 'jquery' ), _S_VERSION, true );
	wp_localize_script( 'wc-estore-ajax-search-js', 'search_form', array(
		'url'   => admin_url( 'admin-ajax.php' ),
		'nonce' => wp_create_nonce( 'search-nonce' )
	) );
}
add_action( 'wp_enqueue_scripts', 'wc_estore_scripts' );
