<?php // Don't copy this line!
/**
 * i-dont-want-instructors.php
 *
 * @since 2017-10-12
 */

/**
 * Add "author" support to LifterLMS Course post type
 */
function my_custom_course_support( $args ) {
	$args['supports'][] = 'author';
	return $args;
}
add_filter( 'lifterlms_register_post_type_course', 'my_custom_course_support' );

/**
 * Remove the LifterLMS instructors metabox
 */
function my_custom_instructor_removal() {
	remove_meta_box( 'llms-instructors', 'course', 'normal' );
}
add_action( 'add_meta_boxes', 'my_custom_instructor_removal', 9999 );