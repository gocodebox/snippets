<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the course video embed
remove_action( 'lifterlms_single_course_before_summary', 'lifterlms_template_single_video', 20 );