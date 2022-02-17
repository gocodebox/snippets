<?php // <- do not copy this line.

/**
 * llms-custom-coupon-notification-merge-code.php
 *
 * @since 2022-02-17
 */

/**
 * Add the COUPON merge code to the list.
 */
add_filter(
	'llms_notification_viewpurchase_receipt_get_merge_codes',
	function ( $codes ) {

		$codes['{{COUPON}}'] = __( 'Coupon', 'my-text-domain' );
		return $codes;

	}
);

/**
 * Replace the COUPON merge code with the actual coupon title.
 */
add_filter(
	'llms_notification_viewpurchase_receipt_get_merged_string',
	function ( $string, $notification_view ) {

		// Get the order from the notification.
		$notification = new LLMS_Notification( $notification_view->id );
		$transaction  = llms_get_post( $notification->get( 'post_id' ), 'post' );
		$order        = $transaction->get_order();

		// Do a str_replace() or something here to replace your custom merge codes with your merge data.
		$string = str_replace( '{{COUPON}}', $order->get( 'coupon_code' ), $string );

		return $string;

	},
	10,
	2
);
