<?php // Don't copy this line!
/**
 * example.php
 *
 * @since 2017-09-12
 */

$course_id = 1234; // wp post id of the course

$course = llms_get_post( $course_id );

	
foreach ( $course->get_students() as $student_id ) {

	$student = llms_get_student( $student_id );

	printf( '%1$s: %2$d%%', $student->get_name(), $student->get_progress( $course_id, 'course' ) );

}

// example output
// John Smith: 75%
// Jane Doe: 25.23%
// etc...