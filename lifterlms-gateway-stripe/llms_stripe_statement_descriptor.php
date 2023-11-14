<?php // don't copy this line to your functions.php file!

/**
 * Allows customization of the statement descriptor before passing a charge to Stripe
 * @param    string     $descriptor   Default descriptor
 * @param    string     $order        instance of the LLMS_Order for the related charge
 * @return   string
 */
function my_llms_stripe_statement_descriptor( $descriptor, $order ) {
	return __( 'My Custom Statement Descriptor', 'my-text-domain' );
}
add_filter( 'llms_stripe_statement_descriptor', 'my_llms_stripe_statement_descriptor', 10, 2 );