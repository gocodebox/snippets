<?php // Don't copy this line!
/**
 * llms-student-stuff.php
 *
 * @since 2017-01-04
 */
// get a new student object to work with
// this class will work with any WP User regardless of their roles/caps
$user_id = get_current_user_id();
$student = new LLMS_Student( $user_id );

// get a course
$courses = $student->get_courses( array( 
	'limit' => 1,
	'status' => 'enrolled'
) );

if ( $courses ) {
	// user is enrolled in at least one course
} else {
	// user is not enrolled in any courses
}

if ( $student->get_membership_levels() ) {
	// user is an active member of at least one membership
} else {
	// user is not in any memberships
}