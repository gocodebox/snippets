<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the course Difficulty meta item
remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_difficulty', 20 );

// remove from tile on course and membership catalogs
remove_action( 'lifterlms_after_loop_item_title', 'lifterlms_template_loop_difficulty', 20 );