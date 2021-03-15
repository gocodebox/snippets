<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the course progress bar (and "continue" button)
remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_course_progress', 60 );

// remove from tile on course and membership catalogs
remove_action( 'lifterlms_before_loop_item_title', 'lifterlms_template_loop_progress', 15 );