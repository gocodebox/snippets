<?php // Don't copy this line!
/**
 * llms_user_removed_from_course.php
 *
 * @since 2016-11-30
 */
/**
 * Do something cool when user is removed from a course
 * @param    int     $student_id  WP User ID
 * @param    int     $course_id   WP Post ID of the course
 * @return   void
 */
function my_unenrollment_acton( $student_id, $course_id ) {

	// add a usermeta value that the student used to be in this course
	$past = get_user_meta( $student_id, 'past_courses', true );
	if ( ! $past ) {
		$past = array();
	}

	array_push( $past, $course_id );

	update_user_meta( $student_id, 'past_courses', $past );

}
add_action( 'llms_user_removed_from_course', 'my_unenrollment_acton', 10, 2 );