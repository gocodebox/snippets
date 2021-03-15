<?php // Don't copy this line!
/**
 * wp-custom-logout-url.php
 *
 * @since 2018-05-10
 */
/**
 * Redirect users to the site's homepage upon logout
 */
function my_custom_logout_redirect(){
	wp_redirect( home_url() );
	exit();
}
add_action( 'wp_logout','my_custom_logout_redirect' );