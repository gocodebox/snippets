<?php // Don't copy this line!
/**
 * lifterlms_completed_transaction_redirect.php
 *
 * @since 2017-01-09
 */

/**
 * Redirect a user after sucessfully purchasing a course or membership
 * @param    string     $url    default redirect URL
 * @param    obj        $order  Instance of the LLMS_Order for the completed transaction
 * @return   string
 */
function my_lifterlms_completed_transaction_redirect( $url, $order ) {
	return 'http://mydomain.tld/path/to/page';
}
add_filter( 'lifterlms_completed_transaction_redirect', 'my_lifterlms_completed_transaction_redirect', 10, 2 );