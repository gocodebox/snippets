<?php // Don't copy this line!
/**
 * llms_stripe_new_customer_data.php
 *
 * @since 2017-07-12
 */
/**
 * Customize the final customer object sent to Stripe for a customer
 * See https://stripe.com/docs/api#create_customer for more information on data format
 * @param    array     $customer  array of customer data
 * @param    int       $user_id   WP_User ID of the user a customer is being created for
 * @return   array
 */
function my_llms_stripe_new_customer_data( $customer, $user_id ) {
	if ( ! isset( $customer['metadata'] ) ) {
		$customer['metadata'] = array();
	}
	$customer['metadata']['my_custom_meta'] = 'My Custom Meta Value';
	return $customer;
}
add_filter( 'llms_stripe_new_customer_data', 'my_llms_stripe_new_customer_data', 10, 2 );