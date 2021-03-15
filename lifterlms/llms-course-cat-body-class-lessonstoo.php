<?php // Don't copy this line!
/**
 * llms-course-cat-body-class-lessonstoo.php
 *
 * @since 2017-12-28
 */
/**
 * Add LLMS course categories to the body class list for single courses & single lessons
 * @param    array     $classes  existing classes
 * @return   array
 */
function add_course_cat_to_body_class( $classes ) {
	
	global $post;
	if ( is_singular( 'course' ) ) {
		$course_id = $post->ID;
	} elseif ( is_singular( 'lesson' ) ) {
		$lesson = llms_get_post( $post->ID );
		$course_id = $lesson->get( 'parent_course' );
	}

	if ( $course_id ) {
		foreach( get_the_terms( $course_id, 'course_cat' ) as $category ) {
			// add category slug to the $classes array
			$classes[] = 'course_cat-' . $category->slug;
		}
	}

	return $classes;
}
add_filter( 'body_class','add_course_cat_to_body_class' );