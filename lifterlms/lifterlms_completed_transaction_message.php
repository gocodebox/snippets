<?php // Don't copy this line!
/**
 * lifterlms_completed_transaction_message.php
 *
 * @since 2017-01-09
 */

/**
 * Customize the Success Message displayed after a user successfully completes a LifterLMS purchase
 * @param    string     $msg    default success message
 * @param    obj        $order  Instance of the LLMS_Order for the completed transaction
 * @return   string
 */
function my_lifterlms_completed_transaction_message( $msg, $order ) {
	return __( 'You are already very, very awesome and you are about to become even more awesome!', 'my-text-domain' ); // the __() i18n function is best practice but doesn't have to be used
}
add_filter( 'lifterlms_completed_transaction_message', 'my_lifterlms_completed_transaction_message', 10, 2 );
