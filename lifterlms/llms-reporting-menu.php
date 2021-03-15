<?php // Don't copy this line!
/**
 * show llms reporting to an editor but dont show them settings -- this is gross... sorry
 *
 * @since 2017-08-04
 */


function my_llms_settings_access( $capability ) {
	// you can define any valid WordPress capability here
	// see http://codex.wordpress.org/Roles_and_Capabilities#Capabilities for a comprehensive list of capabilties
	$capability = 'edit_posts';
	return $capability;
}
// add your filters
add_filter( 'lifterlms_admin_menu_access', 'my_llms_settings_access', 10, 1 ); // display the main menu!
add_filter( 'lifterlms_admin_reporting_access', 'my_llms_settings_access', 10, 1 ); // display the
add_filter( 'lifterlms_admin_settings_access', 'my_llms_settings_access', 10, 1 ); // display the



function my_custom_submenu_order( $menu_ord ) {
	global $submenu;

	$user = wp_get_current_user();

	if ( ( ! isset( $user->allcaps['manage_options'] ) || ! $user->allcaps['manage_options'] ) && isset( $submenu['lifterlms'] ) ) {
		unset( $submenu['lifterlms'][1] );
	}

	return $menu_ord;
}
add_filter( 'custom_menu_order', 'my_custom_submenu_order' );