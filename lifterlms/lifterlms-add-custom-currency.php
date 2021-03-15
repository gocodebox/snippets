<?php // Don't copy this line!
/**
 * lifterlms-add-custom-currency.php
 *
 * @since 2016-08-22
 */
function llms_add_currency( $currencies ) {
  
  $code = 'ABC'; // currency code as per ISO currency code standards (http://www.iso.org/iso/home/standards/currency_codes.htm)
  $name = __( 'Currency Name', 'my-text-domain' ); // name to be displayed for the currency
  
  $currencies[$code] = $name;
  
  return $currencies;
}
add_filter( 'lifterlms_currencies', 'llms_add_currency' );