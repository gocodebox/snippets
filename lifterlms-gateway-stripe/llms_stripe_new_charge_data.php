<?php // Don't copy this line!
/**
 * llms_stripe_new_charge_data.php
 *
 * @since 2017-07-12
 */

/**
 * Customize the final charge object sent to Stripe for a charge
 * See https://stripe.com/docs/api#create_charge for more information on data format
 * @param    array     $charge  array of charge data
 * @return   array
 */
function my_llms_stripe_new_charge_data( $charge ) {

	if ( ! isset( $charge['metadata'] ) ) {
		$charge['metadata'] = array();
	}
	$charge['metadata']['my_custom_meta'] = 'My Custom Meta Value';

	return $charge;
}
add_filter( 'llms_stripe_new_charge_data', 'my_llms_stripe_new_charge_data', 10 );