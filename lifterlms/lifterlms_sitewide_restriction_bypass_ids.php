<?php // Don't copy this line!
/**
 * lifterlms_sitewide_restriction_bypass_ids.php
 *
 * @since 2017-03-27
 */

/**
 * Add additional pages to the list of pages shown to non-enrolled visitors when sitewide membership restrictions are in effect
 * @param    array     $ids  WP Post IDs
 * @return   array
 */
function my_lifterlms_sitewide_restriction_bypass_ids( $ids ) {
	
	// add the WP Post IDs of posts which can be accessed without being an enrolled member here
	$custom_ids = array( 123, 456, 789 );

	return array_merge( $ids, $custom_ids );

}

add_filter( 'lifterlms_sitewide_restriction_bypass_ids', 'my_lifterlms_sitewide_restriction_bypass_ids', 10, 1 );
