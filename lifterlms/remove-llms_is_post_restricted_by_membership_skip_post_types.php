<?php // Don't copy this line!
/**
 * remove-llms_is_post_restricted_by_membership_skip_post_types.php
 *
 * @since 2016-12-05
 */
/**
 * Remove a post type from the list of post types LifterLMS will NOT check for membership restrictions
 * @param    array     $post_types  array of post type names
 * @return   array
 */
function my_allow_lessons_restrictions( $post_types ) {

	// the following post types are automatically bypassed
	// during membership restriction checks
	// course
	// lesson
	// llms_quiz
	// llms_membership
	// llms_question
	// llms_certificate
	// llms_my_certificate

	// this will remove lessons from the list so that lessons can be restricted
	$i = array_search( 'lesson', $post_types );
	if ( false !== $i ) {
		unset( $post_types[ $i ] );
	}
	return $post_types;
}
add_filter( 'llms_is_post_restricted_by_membership_skip_post_types', 'my_allow_lessons_restrictions' );