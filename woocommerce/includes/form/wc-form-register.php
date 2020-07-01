<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
wc_print_notices();
?>
<form method="post"
      class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

    <!--			--><?php //do_action( 'woocommerce_register_form_start' ); ?>


    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span
                    class="required">*</span>
        </label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username"
               id="reg_username" autocomplete="username"
               value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
    </p>


    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span
                    class="required">*</span>
        </label>
        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"
               id="reg_email" autocomplete="email"
               value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
    </p>


    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
                    class="required">*</span>
        </label>
        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"
               id="reg_password" autocomplete="new-password"/>
    </p>


    <!--			--><?php //do_action( 'woocommerce_register_form' ); ?>

    <p class="woocommerce-form-row form-row">
		<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
        <button type="submit"
                class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit"
                name="register"
                value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
    </p>

    <!--			--><?php //do_action( 'woocommerce_register_form_end' ); ?>

</form>
