<?php // Don't copy this line!
/**
 * llms-lesson-complete-class.php
 *
 * @since 2016-07-14
 */
/**
 * Add a complete / incomple class to LifterLMS lessons
 * @param array $classes array of classes to be applied to the post element
 * @return array
 */
function llms_lesson_complete_class( $classes ) {
	global $post;
	if ( 'lesson' === get_post_type( $post->ID ) ) {
		$lesson = new LLMS_Lesson( $post );
		$classes[] = $lesson->is_complete() ? 'complete' : 'incomplete';
	}
	return $classes;
	
}
add_filter( 'post_class', 'llms_lesson_complete_class', 10, 1 );