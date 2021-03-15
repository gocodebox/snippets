<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-remove-display-course-syllabus-author/
 *
 * @since 2016-10-13
 */

function my_late_init() {
  
   remove_action( 'lifterlms_single_course_before_summary', 'lifterlms_template_single_video', 20 );
  
}
add_action( 'init', 'my_late_init', 15 );
