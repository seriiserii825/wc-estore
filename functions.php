<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
require_once __DIR__ . '/inc/func.php';
require_once __DIR__ . '/inc/acf.php';
require_once __DIR__ . '/inc/bs-setup.php';
require_once __DIR__ . '/inc/bs-widgets.php';
require_once __DIR__ . '/inc/bs-styles.php';
require_once __DIR__ . '/inc/bs-settings.php';
require_once __DIR__ . '/inc/navigation.php';
require_once __DIR__ . '/woocommerce/includes/wc-functions.php';
get_template_part('inc/ajax-search');
