<?php // Don't copy this line!
/**
 * lifterlms_registration_redirect.php
 *
 * @since 2017-06-29
 */

/**
 * Redirect to a custom page on your site during LifterLMS Registrations
 * @param    string     $url  default URL
 * @return   string
 */
function my_lifterlms_reg_redirect( $url ) {
	return untrailingslashit( get_site_url() ) . '/my-custom-redirct-page';
}
add_filter( 'lifterlms_registration_redirect', 'my_lifterlms_reg_redirect' );