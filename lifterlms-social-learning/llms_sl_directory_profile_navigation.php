<?php // Don't copy this line!
/**
 * add custom dashboard link 
 *
 * @since 2018-07-03
 */

/**
 * Customize the URL of the dashboard page on a logged-in users SL profile
 * @param    array     $nav  nav items list
 * @return   array
 */
function llms_sl_directory_profile_navigation( $nav ) {

	if ( isset( $nav['dashboard'] ) ) {
		$nav['dashboard']['url'] = 'https://mysite.com/my-account-page';
	}

	return $nav;
}
add_filter( 'llms_sl_directory_profile_navigation', 'llms_sl_directory_profile_navigation' );