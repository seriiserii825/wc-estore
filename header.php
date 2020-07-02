<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		} </script>
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- header -->
<div class="header" id="home1">
    <div class="container">
        <div class="w3l_login">
            <a href="#" data-toggle="modal" data-target="#myModal88">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </a>
        </div>
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
        <div class="cart cart box_1">
            <?php wc_estore_woocommerce_cart_link(); ?>
        </div>
    </div>
</div>
<!-- //header -->
<!-- navigation -->
<div class="navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                        data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <?php wp_nav_menu( [
                	'theme_location'  => '',
                	'menu'            => 'menu-1',
                	'container'       => '',
                	'container_class' => '',
                	'container_id'    => '',
                	'menu_class'      => 'nav navbar-nav',
                	'menu_id'         => '',
                	'echo'            => true,
                	'fallback_cb'     => 'wp_page_menu',
                	'before'          => '',
                	'after'           => '',
                	'link_before'     => '',
                	'link_after'      => '',
                	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                	'depth'           => 0,
                	'walker'          => new Estore_Walker,
                ] ); ?>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->
