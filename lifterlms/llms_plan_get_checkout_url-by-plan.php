<?php // Don't copy this line!

/**
 * Redirect a specific access plan to a custom checkout URL.
 *
 * @since 2021-11-01
 *
 * @param string           $url         The default plan checkout URL.
 * @param LLMS_Access_Plan $access_plan Access plan object.
 */
add_filter( 'llms_plan_get_checkout_url', function( $url, $access_plan ) {
	if ( 1234 === $access_plan->get( 'id' ) ) {
		$url = 'https://mysite.tld/my-custom-url';
	}
	return $url;
}, 10, 2 );