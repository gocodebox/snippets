<?php // Don't copy this line!
/**
 * llms-student-progress-usage.php
 *
 * @since 2017-10-02
 */

$user_id = 1234; // WP_User ID
$course_id = 456; // WP_Post ID of the Course
$student = llms_get_student( $user_id );
if ( $student->exists() ) { // be safe
  
  echo $student->get_progress( $course_id );
  
}