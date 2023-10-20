<?php // Don't copy this line!
/**
 * llms_delete_course_enrollment.php
 *
 * @since 2023-10-20
 */
/**
 * Delete course enrollment of a student.
 *
 * @param int $student_id WP User ID
 * @param int $course_id  WP Post ID of the Course
 * @return void
 */
function llms_delete_course_enrollment() {
	$student_id = 89;
	$course_id  = 196;
	$student    = new LLMS_Student( $student_id );
	$student->delete_enrollment( $course_id );
}
add_action( 'init', 'llms_delete_course_enrollment', 10 );