<?php // Don't copy this line!
/**
 * llms-redirect-when-restricted.php
 *
 * @since 2016-09-02
 */
/**
 * Redirect restrictions to a custom URL
 * @param    array     $results  array or result info
 * @return   void
 */
function my_llms_page_restrictions( $results ) {

	// url to redirect to when user does nt have access
	$redirect_url = 'http://mycustomredirect.url';

	if (  $results['is_restricted'] ) {

		$user_id = get_current_user_id();

		// check access
		$access = ( $user_id ) ? llms_is_user_enrolled( $user_id,  $results['post_id'] ) : false;

		// redirect if use is not logged in or does not have access
		if ( ! $access ) {
			wp_redirect( $redirect_url );
			exit;
		}

	}

	return $results;
}
add_filter( 'llms_page_restricted', 'my_llms_page_restrictions' );