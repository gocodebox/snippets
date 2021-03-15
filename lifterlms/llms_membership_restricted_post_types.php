<?php // Don't copy this line!
/**
 * llms_membership_restricted_post_types.php
 *
 * @since 2016-12-05
 */
/**
 * Add LifterLMS membership restrictions to a custom post type
 * @param    array     $post_types  array of custom post types
 * @return   array
 */
function my_membership_restriction_post_types( $post_types ) {
	array_push( $post_types, 'my_custom_post_type' );
	return $post_types;
}
add_filter( 'llms_membership_restricted_post_types', 'my_membership_restriction_post_types' );