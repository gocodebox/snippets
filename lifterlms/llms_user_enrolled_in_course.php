<?php // Don't copy this line!
/**
 * llms_user_enrolled_in_course.php
 *
 * @since 2016-11-30
 */
/**
 * Do something cool upon user enrollment in a course
 * @param    int     $student_id  WP User ID
 * @param    int     $course_id   WP Post ID of the Course
 * @return   void
 */
function my_enrollment_acton( $student_id, $course_id ) {

	// add the last course a user enrolled in to the usermeta table
	update_user_meta( $student_id, 'last_enrollment_id', $course_id );

}
add_action( 'llms_user_enrolled_in_course', 'my_enrollment_acton', 10, 2 );