<?php // Don't copy this line!
/**
 * llms-add-student-dashboard-tabs.php
 *
 * @since 2016-11-17
 */
/**
 * Add custom dashboard tabs / urls to the dashboard navigation
 * @param    array     $tabs  existing tabs
 * @return   array
 */
function my_custom_dashboard_tabs( $tabs ) {

	// save the signout tab
	$signout = $tabs['signout'];
	// remove the signout tab
	unset( $tabs['signout'] );

	/**
	 * Add custom Tabs below
	 */

	// Basic Custom tab with URL (eg: link to a WordPress page)
	$tabs['my-tab'] = array(
		'title' => __( 'My Tab Title', 'my-text-domain' ),
		'url' => 'http://mydomain.com/path/to/url',
	);

	// Advanced Custom tab with content displayed on the Dashboard as an endpoint
	// NOTE: you'll need to FLUSH PERMALINKS after adding a custom endpoint, if you don't the endpoint will 404!
	// 		 how to flush permalinks: https://lifterlms.com/docs/how-to-flush-wordpress-rewrite-rules-or-permalinks/
	$tabs['my-endpoint'] = array(
		'content' => 'my_custom_endpoint_content', // this should be a callable function that outputs your content
		'endpoint' => __( 'my-endpoint', 'my-text-domain' ), // endpoint slug (eg: http://mysite.com/my-courses/my-endpoint)
		'nav_item' => true, // will add the endpoint to LifterLMS section on WP menu admin pages for use on WP nav menus
		'title' => __( 'My Endpoint Title', 'my-text-domain' ),
	);

	// restore the signout tab
	$tabs['signout'] = $signout;

	return $tabs;

}
add_filter( 'llms_get_student_dashboard_tabs', 'my_custom_dashboard_tabs', 10, 1 );

/**
 * Outputs HTML content for a custom endpoint
 * @return   void
 */
function my_custom_endpoint_content() {
	echo '<p>This is my endpoint content</p>';
}