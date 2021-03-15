<?php // Don't copy this line!
/**
 * llms-course-menu-position.php
 *
 * @since 2016-10-21
 */

/**
 * Update the admin menu positon of LifterLMS courses to prevent conflicts
 * @param    array     $data  course post type registration data
 * @return   array
 */
function my_llms_course_positioning( $data ) {
	$data['menu_position'] = 53;
	return $data;
}
add_filter( 'lifterlms_register_post_type_course', 'my_llms_course_positioning' );
add_filter( 'lifterlms_register_post_type_membership', 'my_llms_course_positioning' );
add_filter( 'lifterlms_register_post_type_llms_engagement', 'my_llms_course_positioning' );
add_filter( 'lifterlms_register_post_type_order', 'my_llms_course_positioning' );
