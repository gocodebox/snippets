<?php // Don't copy this line!
/**
 * llms_dashboard_recent_courses_count.php
 *
 * @since 2017-01-07
 */
/**
 * Customize the number of "recent courses" displayed on the LifterLMS Student Dashboard
 * @param    int     $count  default number of courses (3)
 * @return   int
 */
function my_custom_llms_dashboard_recent_courses_count( $count ) {
	return 10;
}
add_filter( 'llms_dashboard_recent_courses_count', 'my_custom_llms_dashboard_recent_courses_count' );