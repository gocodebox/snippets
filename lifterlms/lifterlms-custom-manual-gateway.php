<?php

/**
 * An additional customized manual payment gateway.
 *
 * Ideally, this class definition should be stored in a separate file
 * that is loaded by the theme's `functions.php` file or a custom plugin.
 *
 * @since 2022-04-01
 */
class Custom_Manual_Gateway extends LLMS_Payment_Gateway_Manual {

	public function __construct() {
		parent::__construct();
		$this->id                = 'manual_ach';
		$this->admin_description = __( 'Collect ACH payments manually. Also handles any free orders during checkout.', 'lifterlms' );
		$this->admin_title       = __( 'Manual ACH', 'lifterlms' );
		$this->title             = __( 'Manual ACH', 'lifterlms' );
		$this->description       = __( 'Pay manually via ACH', 'lifterlms' );
	}
}

// The remaining code goes in your theme's `functions.php` file or a custom plugin.

//include_once 'PATH-TO-THE-Custom_Manual_Gateway-FILE.php';

// When the 'lifterlms_payment_gateways' filter is triggered,
// add the name of the custom payment gateway to the gateways array.
add_filter( 'lifterlms_payment_gateways', function ( $gateways ) {

	$gateways[] = 'Custom_Manual_Gateway';

	return $gateways;
} );
