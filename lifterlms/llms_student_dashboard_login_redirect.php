<?php // Don't copy this line!
/**
 * llms_student_dashboard_login_redirect.php
 *
 * @since 2016-12-21
 */
/**
 * Redirect users to an alternate URL instead of their student dashboard when they login
 * using the form on the Student dashboard page
 * @param    null     $url    url is not set by default and redirects students back to their dashboard
 * @return   string
 */
function my_llms_student_dashboard_login_redirect( $url ) {
	return 'http://mywebsite.tld/path/to/page';
}
add_filter( 'llms_student_dashboard_login_redirect', 'my_llms_student_dashboard_login_redirect' );