<?php // Don't copy this line!
/**
 * llms_show_preview_excerpt-alt.php
 *
 * @since 2017-11-15
 */
/**
 * Hide lesson excerpt only when tile displayed in lesson navigation area
 * @param    boolean     $bool  default [true|false]
 * @return   boolean
 */
function my_llms_show_preview_excerpt( $bool ) {

	if ( 'lesson' === get_post_type( get_the_ID() ) ) {
		return false;
	}

	return $bool;
}
add_filter( 'llms_show_preview_excerpt', 'my_llms_show_preview_excerpt' );