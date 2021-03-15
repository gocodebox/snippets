<?php // Don't copy this line!
/**
 * remove default genesis post info from llms lessons
 *
 * @since 2016-12-20
 */
add_filter( 'genesis_post_info', 'sp_post_info_filter' );
function sp_post_info_filter($post_info) {
	if ( is_lesson() ) {
		return '';
	}
	return $post_info;
}