<?php // Don't copy this line!
/**
 * brunch-theme-compat.php
 *
 * @since 2017-04-18
 */
/**
 * Remvoe the brunch theme excerpt addition on LifterLMS Course and Lesson preview items
 */
function maybe_remove_brunch_excerpt() {
	global $post;
	if ( isset( $post ) && in_array( $post->post_type, array( 'course', 'lesson' ) ) ) {
		remove_filter( 'the_excerpt', 'brunch_pro_excerpt_read_more_link' );
	}
}
add_action( 'wp', 'maybe_remove_brunch_excerpt' );