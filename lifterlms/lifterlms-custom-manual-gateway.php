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
		$this->id                   = 'custom_manual';
		$this->admin_description    = __( 'Collect payments manually. Also handles any free orders during checkout.', 'lifterlms' );
		$this->admin_title          = __( 'Custom Manual', 'lifterlms' );
		$this->title                = __( 'Custom Manual', 'lifterlms' );
		$this->description          = __( 'Pay manually via custom procedure.', 'lifterlms' );
		$this->payment_instructions = '';
	}

	/**
	 * Output payment instructions if the order is pending.
	 *
	 * @since 2022-04-08
	 */
	public function before_view_order_table() {
		global $wp;

		if ( ! empty( $wp->query_vars['orders'] ) ) {

			$order = new LLMS_Order( intval( $wp->query_vars['orders'] ) );
			if (
				$order->get( 'payment_gateway' ) === $this->id
				&& in_array( $order->get( 'status' ), array( 'llms-pending', 'llms-on-hold' ) )
			) {
				echo $this->get_payment_instructions();
			}
		}
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
