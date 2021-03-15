<?php // Don't copy this line!
/**
 * lifterlms-tracking-pixels-example.php
 *
 * @since 2017-03-08
 */
/**
 * A sample function which will output conversion pixels on successful LifterLMS Checkouts
 */
function my_lifterlms_tracking_pixel_scripts() {

	// only proceed if an order has been completed
	if ( ! isset( $_GET['order-complete'] ) ) {
		return;
	}

	$key = $_GET['order-complete'];
	$order = llms_get_order_by_key( $key );
	if ( $order && is_a( $order, 'LLMS_Order' ) ) {
		// you can access various pieces of order information via the order
		// see https://github.com/gocodebox/lifterlms/blob/master/includes/models/model.llms.order.php
		// for a full list of data that can be accessed via the order object
		// here's a few useful examples
		$id = $order->get( 'id' );
		$price = $order->get( 'total' );
		$fname = $order->get( 'billing_first_name' );
		$lname = $order->get( 'billing_last_name' );
		?>
		<!-- replace this comment with the pixel / tracking code snippet -->
		<?php
	}

}
// if the pixel needs to be output in the html HEAD
add_action( 'wp_head', 'my_lifterlms_tracking_pixel_scripts' );

// if the pixel needs to be output before the closing BODY tag
add_action( 'wp_footer', 'my_lifterlms_tracking_pixel_scripts' );