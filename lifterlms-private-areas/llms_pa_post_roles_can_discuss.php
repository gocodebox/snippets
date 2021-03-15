<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */
/**
 * Allow additional roles to discuss a PA post from the admin panel
 * @param    array     $roles  array of WP_Role names
 * @return   array
 */
function my_llms_pa_post_roles_can_discuss( $roles ) {
	$roles[] = 'editor';
	return $roles;
}
add_filter( 'llms_pa_post_roles_can_discuss', 'my_llms_pa_post_roles_can_discuss', 10, 1 );