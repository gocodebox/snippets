<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the list of associated course tag links
remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_course_tags', 35 );