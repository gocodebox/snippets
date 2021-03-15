<?php // Don't copy this line!
/**
 * lifterlms_recurring_price_html.php
 *
 * @since 2016-08-08
 */
/**
 * Update the display of recurring payment information
 * @param  string  $text     HTML / Text to display the price
 * @param  obj     $product  Instance of the LLMS_Product
 * @return string
 */
function llms_get_recurring_price_html( $text, $product ) {
  return sprintf( __( 'Recurring Price: %s', 'my-text-domain' ), $text );

}
add_filter( 'lifterlms_recurring_price_html', 'llms_recurring_price_html', 10, 2 );