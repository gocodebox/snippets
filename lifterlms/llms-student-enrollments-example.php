<?php // Don't copy this line!
/**
 * check to see if a student is enrolled in at least one course
 *
 * @since 2017-12-05
 */

$student = llms_get_student();

// $student will be false if there's no logged in user
if ( ! $student ) {
	return; // or do something for logged out users here
}

// see if the student is enrolled in at least one course
$courses = $student->get_courses( 
	'status' => 'enrolled',
	'limit' => 1,
);

if ( ! $courses['results'] ) {
	// user is logged in but not enrolled in any courses
} else {
	// user is enrolled in at least one course
}