<?php // Don't copy this line!
/**
 * llms-conditionally-disable-gateways.php
 *
 * @since 2018-05-08
 */


function disable_gateways( $gateways ) {

	foreach ( $gateways as $i => $gateway ) {

		if ( 'LLMS_Payment_Gateway_PayPal' === $gateway ) {
			unset( $gateways[ $i ] );
		}

	}

	return $gateways;

}

function maybe_disable_gateways() {

	if ( ! is_llms_checkout() ) {
		return;
	}

	if ( isset( $_GET['plan'] ) && 606 == $_GET['plan'] ) {
		add_filter( 'lifterlms_payment_gateways', 'disable_gateways', 100, 1 );
	}

}
add_action( 'wp', 'maybe_disable_gateways' );