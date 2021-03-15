<?php // Don't copy this line!
/**
 * Add Genesis layout options to LifterLMS Post Types
 *
 * @since 2016-08-04
 */
add_filter( 'lifterlms_register_post_type_lesson', 'llms_genesis_layout_support' );
add_filter( 'lifterlms_register_post_type_course', 'llms_genesis_layout_support' );
add_filter( 'lifterlms_register_post_type_membership', 'llms_genesis_layout_support' );
function llms_genesis_layout_support( $args ) {

	if ( isset( $args['supports'] ) && is_array( $args['supports'] ) ) {
		$args['supports'][] = 'genesis-layouts';
	}

	return $args;

}