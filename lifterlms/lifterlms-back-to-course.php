<?php // Don't copy this line!
/**
 * lifterlms-back-to-course.php
 *
 * @since 2016-08-15
 */

remove_action( 'lifterlms_single_lesson_before_summary', 'lifterlms_template_single_parent_course', 10 );
add_action( 'lifterlms_single_lesson_after_summary', 'lifterlms_template_single_parent_course', 15 );