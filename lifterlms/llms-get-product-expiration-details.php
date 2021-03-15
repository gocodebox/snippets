<?php // Don't copy this line!
/**
 * llms-get-product-expiration-details.php
 *
 * @since 2018-02-07
 */
/**
 * Customize the date format for access expiration on LifterLMS purchase summary
 * @param    string     $details  default details string
 * @param    obj        $plan     LLMS_Access_Plan instance
 * @return   string
 */
function my_plan_expiration_details( $details, $plan ) {

	if ( 'limited-date' === $plan->get( 'access_expiration' ) ) {
		$format = 'n/j/Y'; // customize your date format here, must be a date acceptable to php date() function: http://php.net/manual/en/function.date.php
		$details = sprintf( _x( 'access until %s', 'Access expiration date', 'my-text-domain' ), $plan->get_date( 'access_expires', $format ) );
	}

	return $details;
}
add_filter( 'llms_get_product_expiration_details', 'my_plan_expiration_details', 10, 2 );