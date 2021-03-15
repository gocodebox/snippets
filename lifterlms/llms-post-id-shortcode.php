<?php // Don't copy this line!
/**
 * llms-post-id-shortcode.php
 *
 * @since 2018-02-06
 */
function my_course_id_shortcode() {

	global $post;
	if ( $post ) {
		$id = $post->ID;
	} else {
		$id = '';
	}

	return $id;
}
add_shortcode( 'course_id', 'my_course_id_shortcode' );
