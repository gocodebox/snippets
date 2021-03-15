<?php // Don't copy this line!
/**
 * llms_dashboard_courses_per_page.php
 *
 * @since 2017-03-22
 */
/**
 * Customize the number of courses displayed on each page of the "View Courses" endpoint on the LifterLMS Student Dashboard
 * @param    int     $count  default number of courses (10)
 * @return   int
 */
function my_custom_llms_dashboard_recent_courses_count( $count ) {
	return 25;
}
add_filter( 'llms_dashboard_courses_per_page', 'my_custom_llms_dashboard_recent_courses_count' );