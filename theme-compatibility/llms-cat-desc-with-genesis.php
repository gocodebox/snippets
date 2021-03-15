<?php // Don't copy this line!
/**
 * https://wordpress.org/support/topic/genesis-course-categories-descriptions/#post-8175407
 *
 * @since 2016-09-12
 */
function my_output_cat_desc() {

	if ( is_category() || is_tag() || is_tax() ) {

		echo single_term_title();
		echo term_description();

	}
	
}
add_action( 'lifterlms_archive_description', 'my_output_cat_desc' );