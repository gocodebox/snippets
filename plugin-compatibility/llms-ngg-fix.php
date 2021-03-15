<?php // Don't copy this line!
/**
 * potentially resolves conflict with NextGen Gallery Plugil
 *
 * @since 2016-10-22
 */


function my_ngg_js_compat() {
	echo '<script type="text/javascript">window.llms = window.llms || {};window.llms.ajaxurl = "'.admin_url( 'admin-ajax.php' ).'";</script>';
	echo '<script type="text/javascript">window.LLMS = window.LLMS || {};</script>';
	echo '<script type="text/javascript">window.LLMS.l10n = window.LLMS.l10n || {}; window.LLMS.l10n.strings = ' . LLMS_l10n::get_js_strings( true ) . ';</script>';
	if ( ( is_llms_account_page() || is_llms_checkout() ) && 'yes' === get_option( 'lifterlms_registration_password_strength' ) ) {
		echo '<script type="text/javascript">window.LLMS.PasswordStrength = window.LLMS.PasswordStrength || {}; window.LLMS.PasswordStrength.get_minimum_strength = function() { return "' . llms_get_minimum_password_strength() . '"; }</script>';
	}
}
add_action( 'wp_footer', 'my_ngg_js_compat', -1 );