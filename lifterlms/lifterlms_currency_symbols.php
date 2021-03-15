<?php // Don't copy this line!
/**
 * modify the currency symbol of Algerian Dinar to be "DA" instead of the actual currency symbol
 *
 * @since 2018-04-30
 */

function my_custom_curr_symbols( $symbols ) {
	$symbols['DZD'] = 'DA';
	return $symbols;
}
add_filter( 'lifterlms_currency_symbols', 'my_custom_curr_symbols' );