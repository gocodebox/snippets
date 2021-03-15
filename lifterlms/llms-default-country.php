<?php // Don't copy this line!
/**
 * Change the default country on LifterLMS Country Dropdowns
 *
 * @since 2016-03-23
 */

// make Great Britain the default country in the country list on LifterLMS Country Selects
add_filter( 'lifterlms_countries', function( $countries ) {
	
	$countires = array_merge( array( 'GB' => $counties['GB'] ) , $countries );
	
	return $countires;
} );