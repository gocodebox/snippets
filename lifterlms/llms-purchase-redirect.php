<?php // Don't copy this line!
/**
 * llms-purchase-redirect.php
 *
 * @since 2016-07-18
 */
add_action( 'lifterlms_order_process_success', 'llms_thank_you_redirect', 9, 1 );
function llms_thank_you_redirect( $order ) {
	wp_redirect( 'http://mywebsite.com/thank-you-page-url' );
	exit();
}