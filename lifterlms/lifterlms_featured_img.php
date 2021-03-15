<?php // Don't copy this line!
/**
 * show a different featured image to users who aren't enrolled in a given course or membership
 *
 * @since 2018-08-27
 */

/**
 * show a different featured image to users who aren't enrolled in a given course or membership
 * only replaces the image on cataologs & account page
 * @return   string
 */
function my_lifterlms_featured_img( $img ) {
	if ( is_llms_account_page() || is_courses() || is_memberships() ) {
		$uid = get_current_user_id();
		if ( ! $uid || ! llms_is_user_enrolled( $uid, get_the_ID() ) ) {
			$my_img_url = 'https://mywebsite.com/path/to/image';
			return '<img src="' . $my_img_url . '" alt="' . get_the_title( get_the_ID() ) . '" class="llms-featured-image wp-post-image">';
		}
	}
	return $img;
}
add_filter( 'lifterlms_featured_img', 'my_lifterlms_featured_img' );