<?php // Don't copy this line!
/**
 * llms_plan_get_checkout_url.php
 *
 * @since 2018-07-10
 */
/**
 * Restores pre 3.18.0 popover functionality for access plans with any membership restrictions
 * Prior to 3.18.0 any # of access plans caused a popover on click
 * since 3.18.0 if there's only one access plan users are directed to the membership page only when there's more than 1 membership restriction
 * @param    string     $url   default access plan checkout url
 * @param    obj     $plan  instance of the LLMS_Access_Plan model
 * @return   string
 */
function my_llms_plan_get_checkout_url( $url, $plan ) {
	$available = $plan->is_available_to_user( get_current_user_id() );
	if ( ! $available ) {
		$url = '#llms-plan-locked';
	}
	return $url;
}
add_filter( 'llms_plan_get_checkout_url', 'my_llms_plan_get_checkout_url', 10, 2 );