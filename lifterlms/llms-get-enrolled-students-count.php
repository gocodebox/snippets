<?php // Don't copy this line!
/**
 * get the number of students enrolled in a particular LifterLMS Course
 *
 * @since 2016-06-27
 */
/**
 * Get the number of students enrolled in a LifterLMS Course
 * @param  int  $course_id  the WordPress Post ID of the LifterLMS Course
 * @return int
 */
function llms_get_enrolled_students_count( $course_id ) {
  $course = new LLMS_Course( $course_id );
  $students = $course->get_enrolled_students();
  return count( $students );
}

// use the function
$course_id = 123;
echo llms_get_enrolled_students_count( $course_id );
