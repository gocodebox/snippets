<?php // Don't copy this line!
/**
 * lifterlms_checkout_buy_button_text.php
 *
 * @since 2016-10-28
 */
/**
 * Customize the text of the "Buy Now" button on the checkout screen
 * @param    string   $text   default text of the button
 * @return   string
 */
function my_llms_buy_button_text( $text ) {
	return __( 'PURCHASE!', 'my-text-domain' );
}
add_filter( 'lifterlms_checkout_buy_button_text', 'my_llms_buy_button_text' );