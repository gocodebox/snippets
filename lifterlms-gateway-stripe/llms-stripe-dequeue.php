<?php // Don't copy this line!
/**
 *  Remove Stripe.js (as enqueued by the LifterLMS Stripe plugin) from pages where Stripe isn't explicitly required or used
 *
 * @since 2020-06-03
 */

/**
 * Remove Stripe.js (as enqueued by the LifterLMS Stripe plugin) from pages where Stripe isn't explicitly required or used.
 *
 * Stripe *recommends* that you load Stripe.js on every site on your website
 * to improve automatic fraud detection (https://stripe.com/docs/radar).
 *
 * You can use this code if you don't care about Radar / fraud detection
 * to enjoy a small performance improvement.
 *
 * @since 2020-06-03
 *
 * @return void
 */
function my_stripe_dequeue() {

	if ( function_exists( 'is_llms_checkout' ) && function_exists( 'is_llms_account_page' ) ) {
		if ( ! is_llms_checkout() && ! is_llms_account_page() ) {
			wp_dequeue_script( 'stripe' );
		}
	}

}
add_action( 'wp_enqueue_scripts', 'my_stripe_dequeue', 15 );