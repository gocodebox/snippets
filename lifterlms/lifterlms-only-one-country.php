<?php // Don't copy this line!
/**
 * lifterlms-only-one-country.php
 *
 * @since 2017-05-22
 */
add_filter( 'lifterlms_countries', 'my_llms_countries', 10, 1 );
function my_llms_countries( $countries ) {
	return array(
		'DE' => __( 'Germany', 'my-text-domain' ),
	);
}