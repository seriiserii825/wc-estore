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
        <?php do_action('header-parts'); ?>
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
