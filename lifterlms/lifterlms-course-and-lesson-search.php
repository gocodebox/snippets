<?php // Don't copy this line!
/**
 * lifterlms-course-and-lesson-search.php
 *
 * @since 2016-05-17
 */
add_filter( 'lifterlms_register_post_type_lesson', 'allow_course_and_lesson_search' );
add_filter( 'lifterlms_register_post_type_course', 'allow_course_and_lesson_search' );
function allow_course_and_lesson_search( $args ) {
	$args['exclude_from_search'] = false;
	return $args;
	
}