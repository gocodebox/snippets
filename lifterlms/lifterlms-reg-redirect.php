<?php // Don't copy this line!
/**
 * lifterlms-reg-redirect.php
 *
 * @since 2016-05-19
 */
function my_registration_redirect( $url, $user_id ) {

	// instatiate a student obj
	$student = new LLMS_Student( $user_id );
	// this function returns an array of user membership levels
	// or an empty array if no memberships, so check the falsie here
	if ( ! $student->get_membership_levels() ) {
		// grab our membership page (or hardcore a URL, whatever you want to do here)
		$url = get_permalink( get_option( 'lifterlms_memberships_page_id' ) );
	}
	// return the original or our override from inside the if statement
	return $url;
}
// priority must be BELOW 10 (which is our default)
// because this filter executes a redirect anything 10 or greater will never execute because
// you'll be redirected before you get a chance to execute your custom function
add_filter( 'lifterlms_registration_redirect', 'my_registration_redirect', 7, 2 );
add_filter( 'lifterlms_login_redirect', 'my_registration_redirect', 7, 2 );