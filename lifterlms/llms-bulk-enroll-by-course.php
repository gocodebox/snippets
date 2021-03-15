<?php // Don't copy this line!
/**
 * llms-bulk-enroll-by-course.php
 *
 * @since 2016-07-06
 */

// bulk enroll all students in a specific course into a specific membership

$course_id = 123; // wp post id of the course
$membership_id = 456; // wp post id of the membership

// get all students in the course 
$query = new LLMS_Student_Query( array(
  'post_id' => $course_id,
  'per_page' => 1000, // note you cannot use -1 as in WP_Query to grab all results
) );

foreach ( $query->get_students() as $student ) {

  $student->enroll( $membership_id );

}