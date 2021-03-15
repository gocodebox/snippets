<?php // Don't copy this line!
/**
 * llms-paypal-enable-shipping.php
 *
 * @since 2018-02-17
 */
/**
 * Removes the "NOSHIPPING" parameter defined by LifterLMS PayPal
 * Enables the Shipping fields UI inside PayPal for a transaction
 * @param    array     $request  request data to be passed to PayPal
 * @param    string    $action   action being called (doExpressCheckout or etc...)
 * @param    array     $data     array of PayPal NVP data
 * @return   array
 */
function my_llms_paypal_shipping_fields(  $request, $action, $data ) {

	if ( isset( $request['body'] ) ) {
		unset( $request['body']['NOSHIPPING'] );
	}

	return $request;

}
add_filter( 'llms_paypal_build_request', 'my_llms_paypal_shipping_fields', 10, 3 );