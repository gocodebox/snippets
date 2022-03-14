<?php // Don't copy this line!
/**
 * Changes the 'access_expires' formatted string from 'date time' to just 'date'.
 *
 * @see LLMS_Post_Model::get_date()
 *
 * @since 2022-03-14
 *
 * @param string $date The formatted date.
 * @return string
 */
function my_access_plan_access_expires_date( $date ) {

	$format = get_option( 'date_format' );
	$date = date_i18n( $format, strtotime( $date ) );

	return $date;
}
add_filter( 'llms_get_access_plan_access_expires_date', 'my_access_plan_access_expires_date', 10, 1 );
