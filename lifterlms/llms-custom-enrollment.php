<?php // Don't copy this line!
/**
 * enroll student in a membership after enrolling in courses
 *
 * @since 2017-12-20
 */

function my_enrollment_acton( $student_id, $course_id ) {

	$membership_id = 1234; // use the WP Post ID of the membership you want to enroll your students into

	// this will enroll without checking which course 
	llms_enroll_student( $student_id, $membership_id );

	// this will enroll only if the student has just enrolled in a specific course(s)
	$course_ids = array( 123, 456, 789 ); // create an array of 1 or more course IDs
	if ( in_array( $course_id, $course_ids ) ) {
		llms_enroll_student( $student_id, $membership_id );	
	}

}
add_action( 'llms_user_enrolled_in_course', 'my_enrollment_acton', 10, 2 );