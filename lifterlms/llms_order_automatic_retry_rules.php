<?php // Don't copy this line!
/**
 * Add a retry rule to the end of the default rules that waits 7 days and retries the recurring payment
 *
 * @since 2018-05-18
 */

/**
 * Add a retry rule to the end of the default rules that waits 7 days and retries the recurring payment
 * @param    array     $rules   existing rules
 * @return   array
 */
function my_custom_retry_rules( $rules ) {
	$rules[] = array(
		'delay' => WEEK_IN_SECONDS,
		'status' => 'on-hold',
		'notifications' => true,
	);
	return $rules;
}
add_filter( 'llms_order_automatic_retry_rules', 'my_custom_retry_rules' );