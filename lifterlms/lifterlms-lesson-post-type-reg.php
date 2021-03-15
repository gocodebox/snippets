<?php // Don't copy this line!
/**
 * modify the data used to register the lifterlms lesson post type
 *
 * @since 2016-04-23
 */

/**
 * Modify default Lesson post type registration
 * @param  array  $args  associative array of lesson post type registration data
 * @return array
 */
function my_custom_lesson_rewrite( $args ) {

	$args['rewrite'] = array( 
		'slug' => 'tutorial',
		'with_front' => false,
		'feeds' => true
	);

	return $args;

}

add_filter( 'lifterlms_register_post_type_lesson', 'my_custom_lesson_rewrite' );