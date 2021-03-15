<?php // Don't copy this line!
/**
 * see: https://lifterlms.com/docs/post-layout-options/
 *
 * @since 2017-08-09
 */
/**
 * Add LaunchPad Layout Settings to a custom post type
 * @param    array     $post_types  array of default post types
 * @return   array
 */
function add_lp_mb_for_my_post_type( $post_types ) {
	$post_types[] = 'my_custom_post_type';
	return $post_types;
}
add_filter( 'launchpad_layout_settings_metabox_post_types', 'add_lp_mb_for_my_post_type', 10, 1 );