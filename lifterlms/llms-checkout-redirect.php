<?php // Don't copy this line!
/**
 * llms-checkout-redirect.php
 *
 * @since 2016-11-04
 */

/**
 * Redirect a user after sucessfully purchasing a course or membership
 * @param    string     $url    default url
 * @param    obj     $order  instance of LLMS_Order
 * @return   string
 */
function my_llms_checkout_redirect( $url, $order ) {

	// if you want to change the destination based on the purchased product
	if ( 123 == $order->get( 'product_id' ) ) {
		$url = add_query_arg( 'order-complete', $order->get( 'order_key' ), 'http://myurl.tld/product123startpage' );
	}
	// go to the student dashboard
	else {
		$url = llms_get_page_url( 'myaccount', array( 'order-complete', $order->get( 'order_key' ) ) );
	}

	return $url;
}
add_filter( 'lifterlms_completed_transaction_redirect', 'my_llms_checkout_redirect', 10, 2 );