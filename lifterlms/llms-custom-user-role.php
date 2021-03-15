<?php // Don't copy this line!
/**
 * llms-custom-user-role.php
 *
 * @since 2018-11-06
 */

/**
 * Use a different role during LifterLMS user registrations
 * @param   array    $data assoc. array of data to be used to create the new user
 * @return  array
 */
function my_modify_default_user_role( $data ) {
	$data['role'] = 'subscriber';
	return $data;
}
add_filter( 'lifterlms_user_registration_insert_user', 'my_modify_default_user_role' );