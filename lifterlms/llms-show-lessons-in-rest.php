<?php // Don't copy this line!
/**
 * llms-show-lessons-in-rest.php
 *
 * @since 2018-09-26
 */
add_filter( 'lifterlms_register_post_type_lesson', 'my_show_lessons_in_rest' );
function my_show_lessons_in_rest( $args ) {
	$args['show_in_rest'] = true;
	return $args;
}