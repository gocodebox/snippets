<?php // Don't copy this line!
/**
 * Get number of lessons attached to a LifterLMS course
 *
 * @since 2016-08-26
 */
/**
 * Get number of lessons attached to a course
 * @param    int   $course_id  WP Post ID of a course
 * @return   int
 */
function my_get_lesson_count( $course_id ) {
	
	$course = new LLMS_Course( $course_id );
	return count( $course->get_children_lessons() );

}


// usage within a course
echo my_get_lesson_count( get_the_ID() );

// usage outside a course
$course_id = 123;
echo my_get_lesson_count( $course_id );
