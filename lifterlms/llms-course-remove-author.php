<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

// remove the course author image and related author data
remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_course_author', 40 );

// remove from tile on course and membership catalogs
remove_action( 'lifterlms_after_loop_item_title', 'lifterlms_template_loop_author', 10 );