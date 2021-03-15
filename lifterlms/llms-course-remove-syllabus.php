<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the output of the course syllabus
remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_syllabus', 90 );