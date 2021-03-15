<?php // Don't copy this line!
/**
 * llms-custom-currency.php
 *
 * @since 2016-10-11
 */

/**
 * Add a custom currency to LifterLMS
 * Our custom currency code for this example is "VFC"
 * We'll call the currency "Very Fancy Coins"
 * And use an "@" symbol for the currency symbol (because it could resemble a very fancy coin if you look at it right)
 */

/**
 * Add a custom currency to LifterLMS
 * @param    array     $currencies   existing currencies
 * @return   array
 */
function my_custom_currency( $currencies ) {

	$currencies['VFC'] = __( 'Very Fancy Coins', 'my-domain' );
	return $currencies;

}
add_filter( 'lifterlms_currencies', 'my_custom_currency' );

/**
 * Add a Custom Currency Symbol for the new custom currency
 * @param    array     $currencies  existing currency symbols
 * @return   array
 */
function my_custom_currency_symbol( $currencies ) {

	$currencies['VFC'] = '@';
	return $currencies;

}
add_filter( 'lifterlms_currency_symbols', 'my_custom_currency_symbol' );

