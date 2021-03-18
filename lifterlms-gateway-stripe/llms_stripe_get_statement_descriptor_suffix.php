<?php // Don't copy this line!

/**
 * Modify the statement descriptor suffix
 *
 * @since 2021-03-18
 *
 * @link https://stripe.com/docs/statement-descriptors#dynamic
 *
 * @param string     $suffix Default statement descriptor suffix. y default the suffix will be "COURSE" or "MEMBERSHIP" depending on what type of product is being purchased.
 * @param LLMS_Order $order  The LifterLMS Order Object, view docs at https://developer.lifterlms.com/reference/classes/llms_order/.
 * @return string
 */
function my_llms_stripet_statement_descriptor_suffix( $suffix, $order ) {
    return _x( 'MY DESCRIPTOR', 'Statement descriptor suffix. Only accepts Latin alphabetic characters.', 'my-text-domain' );
}

add_filter( 'llms_stripe_get_statement_descriptor_suffix', 'my_llms_stripet_statement_descriptor_suffix', 10, 2 );
