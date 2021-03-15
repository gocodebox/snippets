<?php // Don't copy this line!
/**
 * llms_stripe_refund_data.php
 *
 * @since 2017-07-12
 */

/**
 * Customize the final refund object sent to Stripe for a refund
 * See https://stripe.com/docs/api#create_refund for more information on data format
 * @param    array     $refund  array of refund data
 * @return   array
 */
function my_llms_stripe_refund_data( $refund ) {
	if ( ! isset( $refund['metadata'] ) ) {
		$refund['metadata'] = array();
	}
	$refund['metadata']['my_custom_meta'] = 'My Custom Meta Value';
	return $refund;
}
add_filter( 'llms_stripe_refund_data', 'my_llms_stripe_refund_data', 10 );

