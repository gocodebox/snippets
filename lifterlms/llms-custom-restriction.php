<?php // Don't copy this line!
/**
 * Custom restriction check to automatically restrict all itmes in a given post type to users nerolled in one or more membership levels
 *
 * @since 2016-08-29
 * @since [version] Updated to exclude users who can edit the posts and WordPress dashboard.
 */

/**
 * Custom restriction check to automatically restrict all itmes in a given post type
 * to users nerolled in one or more membership levels.
 *
 * @param array $results Array or result info.
 * @param int   $post_id The ID of the content to be restricted.
 * @return array
 */
function my_llms_page_restrictions( $results, $post_id ) {

    // Do not redirect:
    // - when on the WordPress dashboard
    // - for users who can edit/modify the post.
    if ( is_admin() || ( $post_id && current_user_can( 'edit_post', $post_id ) ) ) {
        return $results;
    }
	
	// Array of custom post type names.
	$my_post_types = array(
		'my_custom_post_type',
	);

	// Array of WP_Post ID(s) of the membership(s) you wish to restrict this post type to.
	$membership_ids = array(
		123,
		456,
	);

	// URL to redirect to when user doesn't have access.
	$redirect_url = 'http://mycustomredirect.url';

	// Only check if we're looking at the post type defined above.
	if ( in_array( get_post_type( $post_id ), $my_post_types, true ) ) {

		$user_id = get_current_user_id();

	  	// Loop through ids.
		foreach ( $membership_ids as $id ) {

			// Check access.
			$access = ( $user_id ) ? llms_is_user_enrolled( $user_id, $id ) : false;

			// Redirect if use is not logged in or does not have access.
			if ( ! $access ) {
				wp_safe_redirect( $redirect_url );
				exit;

			}

		}

	}

	return $results;

}
add_filter( 'llms_page_restricted', 'my_llms_page_restrictions', 10, 2 );
