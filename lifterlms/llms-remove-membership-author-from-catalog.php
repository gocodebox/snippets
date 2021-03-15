<?php // Don't copy this line!
/**
 * llms-remove-membership-author-from-catalog.php
 *
 * @since 2017-11-13
 */
/**
 * Remove author information from LifterLMS memberships (not courses)
 */
function maybe_remove_author_info() {
	if ( is_memberships() ) {
		remove_action( 'lifterlms_after_loop_item_title', 'lifterlms_template_loop_author', 10 );
	}
}
add_action( 'wp', 'maybe_remove_author_info' );