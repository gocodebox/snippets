<?php // Don't copy this line!
/**
 * remove "single payment of" via LifterLMS filters
 *
 * @since 2016-08-08
 */

/**
 * Programatically remove "Single Payment Of" from LifterLMS pricing screens
 * @param  string  $text     HTML / Text to display the price
 * @param  obj     $product  Instance of the LLMS_Product
 * @return string
 */
function llms_get_single_price_html( $text, $product ) {
  return str_replace( 'single payment of ', '', $text );
}
add_filter( 'lifterlms_get_single_price_html', 'llms_get_single_price_html', 10, 2 );