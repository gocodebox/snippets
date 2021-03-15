<?php // Don't copy this line!
/**
 * llms-sl-profile-redirect.php
 *
 * @since 2017-10-14
 */

/**
 * Redirect users to their LifterLMS Social Learning Profile on Login
 * @param    string   $url      default LLMS login url
 * @param    int      $user_id  WP User ID of the user who logged in
 * @return   string
 */
function my_llms_student_dashboard_login_redirect( $url, $user_id ) {
	if ( function_exists( 'llms_sl_get_student_profile_url' ) ) {
		$url = llms_sl_get_student_profile_url( $user_id );
	}
	return $url;
}
add_filter( 'lifterlms_login_redirect', 'my_llms_student_dashboard_login_redirect', 999, 2 );