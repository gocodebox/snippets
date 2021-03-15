<?php // Don't copy this line!
/**
 * lifterlms_admin_post_type_access.php
 *
 * @since 2017-04-04
 */
/**
 * Allow WP users with the "edit_posts" capability to access the custom post types
 * @param  string $capability   default capability for access ("manage_options")
 * @return string               modified capability for access
 */
function my_llms_custom_post_type_access( $capability ) {

	// you can define any valid WordPress capability here
	// see http://codex.wordpress.org/Roles_and_Capabilities#Capabilities for a comprehensive list of capabilties
	$capability = 'edit_posts'; 

	return $capability;
  
}
// add your filter
add_filter( 'lifterlms_admin_menu_access', 'my_llms_custom_post_type_access', 10, 1 ); // display the main menu!
add_filter( 'lifterlms_admin_{$post_type}_access', 'my_llms_custom_post_type_access', 10, 1 ); // display the {$post_type} screen
