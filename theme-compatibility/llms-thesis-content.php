<?php // Don't copy this line!
/**
 * llms-thesis-content.php
 *
 * @since 2016-07-28
 */
/**
 * Ensure post and page content is correctly restricted when using the thesis theme
 */
add_filter( 'llms_get_post_content', 'llms_thesis_restriction_fix', 10, 1 );
function llms_thesis_restriction_fix( $content ) {

	if ( 'page' === get_post_type() || 'post' === get_post_type() ) {

		$restriction = llms_page_restricted( get_the_ID() );

		if ( $restriction['is_restricted'] ) {

			return llms_get_template_part( 'content', 'no-access' );

		}

	}

	return $content;

}