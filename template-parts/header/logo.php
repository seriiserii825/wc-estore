<div class="w3l_logo">
	<?php
	$logo          = get_field( 'logo', 'option' );
	$logo_select   = $logo['logo_select'] ? $logo['logo_select'] : '';
	$logo_image    = $logo['logo_image'] ? $logo['logo_image'] : '';
	$logo_title    = $logo['logo_title'] ? $logo['logo_title'] : '';
	$logo_subtitle = $logo['logo_subtitle'] ? $logo['logo_subtitle'] : '';
	?>

	<?php if ( is_front_page() ): ?>
		<?php if ( $logo_select === 'Choose text' ): ?>
			<h1>
				<span><?php echo $logo_title; ?></span>
				<span><?php echo $logo_subtitle; ?></span>
			</h1>
		<?php else: ?>
			<h1>
				<img src="<?php echo $logo_image; ?>" width="300" alt="">
			</h1>
		<?php endif; ?>
	<?php else: ?>
		<?php if ( $logo_select === 'Choose text' ): ?>
			<h1>
				<a href="<?php echo home_url(); ?>">
					<span><?php echo $logo_title; ?></span>
					<span><?php echo $logo_subtitle; ?></span>
				</a>
			</h1>
		<?php else: ?>
			<h1>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo $logo_image; ?>" width="300" alt="">
				</a>
			</h1>
		<?php endif; ?>
	<?php endif; ?>
</div>

