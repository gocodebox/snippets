<?php // Don't copy this line!
/**
 * Output information for students based on enrollment in a course
 *
 * @since 2019-02-18
 */

$course_id = 1234; // WP_Post ID of the course you want to check.
$student = llms_get_student(); // Load the current student.

// If we have a logged in user/student AND the student is enrolled in the course
if ( $student && $student->is_enrolled( $course_id ) {
   // do something for enrolled students.
   printf( "You're enrolled in %s", get_the_title( $course_id ) );
} else {
   // do something for non-enrolled students.
   printf( "You're NOT enrolled in %s", get_the_title( $course_id ) );
}
  