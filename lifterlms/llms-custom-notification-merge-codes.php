<?php // Don't copy this line!
/**
 * llms-custom-notification-merge-codes.php
 *
 * @since 2017-10-18
 * @since 2022-02-17 Filter hook names updated.
 */

/**
 * Add custom merge codes to purchase receipt email notification
 * @param    array     $codes  existing merge codes as $code => $name/title
 * @return   array
 */
function my_custom_merge_codes( $codes ) {
	$codes['{{TAX}}'] = __( 'Tax', 'my-text-domain' );
	return $codes;
}
add_filter( 'llms_notification_viewpurchase_receipt_get_merge_codes', 'my_custom_merge_codes' );

/**
 * Filter the merged notification email to merge custom merge codes
 * @param    [type]     $string             text/html of the notification
 * @param    [type]     $notification_view  instance of the LLMS_Abstract_Notification_View class for the notifications
 * @return   string
 */
function my_custom_merged_string( $string, $notification_view ) {
	
	// get the user id from the notification
	$notification = new LLMS_Notification( $notification_view->id );
	$user_id = $notification->get( 'user_id' );
	
	// do a str_replace() or something here to replace your custom merge codes with your merge data
	$string = str_replace( '{{TAX}}', get_user_meta( $user_id, '_my_tax_key', true ), $string );
	
	return $string;
	
}
add_filter( 'llms_notification_viewpurchase_receipt_get_merged_string', 'my_custom_merged_string', 10, 2 );
