<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
add_action('header-parts', 'estore_login', 10);
function estore_login(){
	get_template_part('template-parts/header/login');
}
add_action( 'header-parts', 'estore_logo', 20 );
function estore_logo() {
	get_template_part( 'template-parts/header/logo' );
}
add_action('header-parts', 'estore_search', 30);
function estore_search(){
	get_template_part('template-parts/header/search');
}
add_action('header-parts', 'estore_cart', 40);
function estore_cart(){
	get_template_part('template-parts/header/cart');
}
