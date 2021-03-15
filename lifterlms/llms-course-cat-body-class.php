<?php // Don't copy this line!
/**
 * llms-course-cat-body-class.php
 *
 * @since 2017-12-28
 */

/**
 * Add LLMS course categories to the body class list for single courses
 * @param    array     $classes  existing classes
 * @return   array
 */
function add_course_cat_to_body_class( $classes ) {


	if ( is_singular( 'course' ) ) {
		global $post;

		foreach( get_the_terms( $post->ID, 'course_cat' ) as $category ) {
			// add category slug to the $classes array
			$classes[] = 'course_cat-' . $category->slug;
		}
	}
	return $classes;
}
add_filter( 'body_class','add_course_cat_to_body_class' );