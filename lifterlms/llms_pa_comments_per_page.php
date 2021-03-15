<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */
/**
 * Customize the number of comments displayed on each page of a Private Area Post
 * @param    int     $number  default # of comments (50)
 * @return   int
 */
function my_llms_pa_comments_per_page( $number ) {
	return 100;
}
add_filter( 'llms_pa_comments_per_page', 'my_llms_pa_comments_per_page', 10, 1 );