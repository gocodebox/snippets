<?php // Don't copy this line!
/**
 * Make the BuddyPress/BuddyBoss "Private Network" available only to "active" LifterLMS User Accounts
 *
 * @since 2020-07-15
 */
/**
 * Make the BuddyPress/BuddyBoss "Private Network" available only to "active" LifterLMS User Accounts
 *
 * An "active" account is any logged in user with active enrollment into at least one course or membership.
 *
 * @return void
 */
function bp_llms_private_network_redirect() {
	
	// Short circuit if LifterLMS or BuddyPress are disabled.
	if ( ! function_exists( 'llms_get_student' ) || ! function_exists( 'bp_enable_private_network' ) ) {
		return;
	}

	$student = llms_get_student();

	// Logged in student, BP Private Network is Enabled and the student is inactive.
	if ( $student && bp_enable_private_network() && ! $student->is_active() ) {

		$redirect_url  = is_ssl() ? 'https://' : 'http://';
		$redirect_url .= isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : '';
		$redirect_url .= isset( $_SERVER['REQUEST_URI'] ) ? $_SERVER['REQUEST_URI'] : '';

		$defaults = array(
			'mode'     => 2,
			'redirect' => $redirect_url,
			'root'     => bp_get_root_domain(),
			'message'  => __( 'Please login to access this website.', 'buddyboss' ),
		);

		bp_core_no_access( $defaults );

	}

}
add_action( 'bp_template_redirect', 'bp_llms_private_network_redirect', 20 );