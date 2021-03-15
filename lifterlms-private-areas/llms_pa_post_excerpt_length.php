<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */

/**
 * Customize the length (in words) of Private Area post excerps
 * @param    int     $length  default word count (55)
 * @return   int
 */
function my_llms_pa_post_excerpt_length( $length ) {
	return 85;
}
add_filter( 'llms_pa_post_excerpt_length', 'my_llms_pa_post_excerpt_length', 10, 1 );