<?php // Don't copy this line!
/**
 * llms_stripe_charge_description.php
 *
 * @since 2017-07-12
 */

/**
 * Allows customization of the charge description before being passed to stripe
 * @param    string     $description  Default Description
 * @param    string     $order        instance of the LLMS_Order for the related charge
 * @return   string
 */
function my_llms_stripe_charge_description( $description, $order ) {
	return __( 'My Custom Charge Description', 'my-text-domain' );
}
add_filter( 'llms_stripe_charge_description', 'my_llms_stripe_charge_description', 10, 2 );