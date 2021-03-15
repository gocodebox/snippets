<?php // Don't copy this line!
/**
 * llms_stripe_api_version.php
 *
 * @since 2017-07-12
 */

/**
 * Change the Stripe API version used by LifterLMS Stripe
 * See available API versions here: https://stripe.com/docs/upgrades#api-changelog
 * LifterLMS Stripe currently uses version 2017-06-05
 * Use at your own risk, especially with regards to MAJOR api versions!
 * @param    string     $api_version  default api version (2017-06-05)
 * @return   version
 */
function my_llms_stripe_api_version( $api_version ) {
	return '2017-05-25'; // because you're silly and want to rollback?
}
add_filter( 'llms_stripe_api_version', 'my_llms_stripe_api_version', 10 );

