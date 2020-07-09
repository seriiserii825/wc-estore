<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wc-estore
 */
get_header();
?>

    <div class="container">
        <div class="page-content">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile; // End of the loop.
			?>
        </div>
    </div>

<?php
get_footer();
