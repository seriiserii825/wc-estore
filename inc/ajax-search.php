<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
add_action( 'wp_ajax_myaction', 'esp_search_ajax_action_callback' );
add_action( 'wp_ajax_nopriv_myaction', 'esp_search_ajax_action_callback' );
function esp_search_ajax_action_callback() {
	/**
	 * Проверяем нонсе из массива пости и из wp_localize script
	 */
	if(!wp_verify_nonce($_POST['nonce'], 'search-nonce')){
		wp_die('Данные пришли с левого адреса');
	}
	$_POST = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
	$args = [
		'post_type' => ['post', 'product'],
		'post_status' => 'public',
		's' => $_POST['s'],
	];

	$query_ajax = new WP_Query($args);
	?>
	<?php if($query_ajax->have_posts()): ?>
		<?php while($query_ajax->have_posts()): ?>
			<?php $query_ajax->the_post(); ?>
			<h3 class="title-search"><?php the_title(); ?></h3>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

<?php
    wp_die();
}
