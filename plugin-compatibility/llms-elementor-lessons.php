<?php // Don't copy this line!
/**
 * Tell Elementor that lessons are "public" even though we don't want them displayed in the WP nav menu UI.
 *
 * @since 2019-02-19
 */

function add_lessons_to_elementor( $post_types ) {
	$obj = get_post_type_object( 'lesson' );
	$post_types['lesson'] = $obj->label;
	return $post_types;
}
add_filter( 'elementor_pro/utils/get_public_post_types', 'add_lessons_to_elementor' );