<?php // Don't copy this line!
/**
 * Custom restriction check to automatically restrict all itmes in a given post type to users nerolled in one or more membership levels
 *
 * @since 2016-08-29
 */

/**
 * Custom restriction check to automatically restrict all itmes in a given post type
 * to users nerolled in one or more membership levels
 * @param    array     $results  array or result info
 * @return   array
 */
function my_llms_page_restrictions( $results ) {

	// array of custom post type names
	$my_post_types = array(
		'my_custom_post_type',
	);

	// Array of WP_Post ID(s) of the membership(s) you wish to restrict this post type to
	$membership_ids = array(
		123,
		456,
	);

	// url to redirect to when user does nt have access
	$redirect_url = 'http://mycustomredirect.url';

	// only check if we're looking at the post type defined above
	if ( in_array( get_post_type( $results['post_id'] ), $my_post_types ) ) {

		$user_id = get_current_user_id();

	  	// loop through ids
		foreach ( $membership_ids as $id ) {

			// check access
			$access = ( $user_id ) ? llms_is_user_enrolled( $user_id, $id ) : false;

			// redirect if use is not logged in or does not have access
			if ( ! $access ) {
				wp_safe_redirect( $redirect_url );
				exit;

			}

		}

	}

	return $results;

}
add_filter( 'llms_page_restricted', 'my_llms_page_restrictions' );