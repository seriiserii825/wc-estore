<!-- newsletter -->
<?php
$newsletter_title = get_field( 'newsletter_title', 'option' );
$newsletter_text  = get_field( 'newsletter_text', 'option' );
?>
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3><?php echo $newsletter_title; ?></h3>
            <p><?php echo $newsletter_text; ?></p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value=""/>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
				<?php
				$contacts_title = get_field( 'conctacts_title', 'option' );
				$contacts_subtitle = get_field( 'conctacts_subtitle', 'option' );
				$contacts_text = get_field( 'contacts_text', 'option' );
				?>
                <h3><?php echo $contacts_title; ?></h3>
                <p><?php echo $contacts_subtitle; ?></p>
	            <?php echo $contacts_text; ?>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3><?php echo get_field( 'information_title', 'option' ); ?></h3>
                <?php wp_nav_menu( [
                	'theme_location'  => 'menu-footer',
                	'menu'            => '',
                	'container'       => '',
                	'container_class' => '',
                	'container_id'    => '',
                	'menu_class'      => 'info',
                	'menu_id'         => '',
                	'echo'            => true,
                	'fallback_cb'     => 'wp_page_menu',
                	'before'          => '',
                	'after'           => '',
                	'link_before'     => '',
                	'link_after'      => '',
                	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                	'depth'           => 0,
                	'walker'          => '',
                ] ); ?>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3><?php echo get_field( 'categories_title', 'option' ); ?></h3>
                <?php wp_nav_menu( [
                	'theme_location'  => 'menu-categories',
                	'menu'            => '',
                	'container'       => '',
                	'container_class' => '',
                	'container_id'    => '',
                	'menu_class'      => 'info',
                	'menu_id'         => '',
                	'echo'            => true,
                	'fallback_cb'     => 'wp_page_menu',
                	'before'          => '',
                	'after'           => '',
                	'link_before'     => '',
                	'link_after'      => '',
                	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                	'depth'           => 0,
                	'walker'          => '',
                ] ); ?>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Profile</h3>
                <ul class="info">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="products.html">Today's Deals</a>
                    </li>
                </ul>
                <h4>Follow Us</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li>
                            <a href="#" class="facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="google"></a>
                        </li>
                        <li>
                            <a href="#" class="pinterest"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.png" alt=" "
                         class="img-responsive"/>
                </a>
            </div>
        </div>
        <div class="container">
            <p>&copy; 2017 Electronic Store. All rights reserved | Design by
                <a href="http://w3layouts.com/">W3layouts</a>
            </p>
        </div>
    </div>
</div>

<!-- header modal -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-8 modal_body_left modal_body_left1"
                         style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item" aria-controls="tab_item-0">
                                        <span>Sign in</span>
                                    </li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1">
                                        <span>Sign up</span>
                                    </li>
                                </ul>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
											<?php wc_get_template_part( 'includes/form/wc-form-login' ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="register">
											<?php wc_get_template_part( 'includes/form/wc-form-register' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">OR</div>
                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3 class="other-nw">Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <ul class="social">
                                    <li class="social_facebook">
                                        <a href="#" class="entypo-facebook"></a>
                                    </li>
                                    <li class="social_dribbble">
                                        <a href="#" class="entypo-dribbble"></a>
                                    </li>
                                    <li class="social_twitter">
                                        <a href="#" class="entypo-twitter"></a>
                                    </li>
                                    <li class="social_behance">
                                        <a href="#" class="entypo-behance"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
