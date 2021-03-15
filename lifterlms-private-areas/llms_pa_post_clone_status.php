<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */
/**
 * Customize the default status of a Private Area post when duplicating a PA post
 * NOTE: if you set to publish, notifications will be sent IMMEDIATELY possilby resulting in a student getting a duplicate notification!
 * @param    string     $status  default status (draft)
 * @return   string
 */
function my_llms_pa_post_clone_status( $status ) {
	return 'publish;' // set this to be any valid WP Post Status
}
add_filter( 'llms_pa_post_clone_status', 'my_llms_pa_post_clone_status', 10, 1 );