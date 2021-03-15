<?php // Don't copy this line!
/**
 * change free text access plan text
 *
 * @since 2017-10-15
 */

/*
 * Change the text displayed for free ($0.00) access plans
 * @param  string  $text   the default text ("Free")
 * @return string
 */ 
function my_free_pricing_text( $text ) {
	return __( 'INCLUDED', 'my-text-domain' ); // change text to whatever you want here
}
add_filter( 'llms_get_free_access_plan_pricing_text', 'my_free_pricing_text' );