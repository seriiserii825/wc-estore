<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'woocommerce_before_main_content', 'estore_add_breadcrumb', 20, 0 );
function estore_add_breadcrumb() {
	?>
	<div class="breadcrumb_dress">
		<div class="container">
			<?php woocommerce_breadcrumb(); ?>
		</div>
	</div>
	<?php
}
