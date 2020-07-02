<div class="search">
	<input class="search_box" type="checkbox" id="search_box">
	<label class="icon-search" for="search_box">
		<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	</label>
	<div class="search_form">
		<form action="<?php esc_url( home_url( '/' ) ); ?>" method="POST">
			<input type="text" name="s" value="<?php get_search_query(); ?>" placeholder="Search...">
			<input type="submit" value="Send">
		</form>
		<div class="search-result"></div>
	</div>
</div>

