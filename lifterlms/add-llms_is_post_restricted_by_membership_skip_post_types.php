<?php // Don't copy this line!
/**
 * add-llms_is_post_restricted_by_membership_skip_post_types.php
 *
 * @since 2016-12-05
 */
/**
 * Add a post type to the list of post types LifterLMS will NOT check for membership restrictions.
 * @param    array     $post_types  array of post type names
 * @return   array
 */
function my_allow_lessons_restrictions( $post_types ) {
  array_push( $post_types, 'my_custom_post_type' );
	return $post_types;
}
add_filter( 'llms_is_post_restricted_by_membership_skip_post_types', 'my_allow_lessons_restrictions' );
