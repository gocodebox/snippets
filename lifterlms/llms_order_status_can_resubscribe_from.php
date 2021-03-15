<?php // Don't copy this line!
/**
 * llms_order_status_can_resubscribe_from.php
 *
 * @since 2018-06-21
 */

/**
 * Customize which order statuses student can resubscribe from
 * @param    array     $statuses  array of order statuses
 *                                default statuses: [ 'llms-pending-cancel', 'llms-pending', 'llms-on-hold' ]
 * @return   array
 */
function my_llms_order_status_can_resubscribe_from( $statuses ) {
	unset( $statuses['llms-pending-cancel'] ); // this would make it so "Pending Cancellation" orders cannot be resubscribed from
	$statuses[] = 'llms-failed'; // this allows "Failed" orders to be resubscribed to
	return $statuses;
}
add_filter( 'llms_order_status_can_resubscribe_from', 'my_llms_order_status_can_resubscribe_from' );