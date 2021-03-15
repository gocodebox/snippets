<?php // Don't copy this line!
/**
 * membership-order-link.php
 *
 * @since 2017-11-13
 */

/**
 * Adds an action to add a link to the membership only on the dashboard
 */
function my_add_link_action() {
	add_action( 'lifterlms_after_loop_item', 'my_add_order_link', 110 );
}
add_action( 'lifterlms_before_student_dashboard', 'my_add_link_action' );

/**
 * Adds a link to the order managment screen for the order initiating enrollment into a membership
 * Outputs that link on the bottom of the membership tiles on the student dashboard
 * @return   void
 */
function my_add_order_link() {

	global $post;

	if ( 'llms_membership' !== $post->post_type ) {
		return;
	}

	$student = llms_get_student();
	if ( ! $student ) {
		return;
	}

	$order = $student->get_enrollment_order( $post->ID );
	if ( $order ) {
		$url = esc_url( trailingslashit( llms_get_endpoint_url( 'orders', '', get_permalink( llms_get_page_id( 'myaccount' ) ) ) ) . $order->get( 'id' ) );
		echo '<a href="' . $url . '">View Order</a>';
	}

}