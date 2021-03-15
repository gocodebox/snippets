<?php // Don't copy this line!
/**
 * lifterlms_save_custom_user_field_{$field_id}.php
 *
 * @since 2016-05-05
 */

/**
 * Customize the value stored in the database before the field data is saved
 *
 * This runs after validation so no need to re-validate here
 * 
 * @param  mixed  $value    user submitted value
 * @param  obj    $user     WP_User instance
 * @param  string $field_id name / id of the field
 * @return mixed
 */
function my_custom_field_save( $value, $user, $field_id ) {

	// for example ensure remove protocal prefixes from the beginning of a web address field
	$value = str_replace( array( 'https://', 'http://' ), '', $value );

	return $value;

}
add_filter( 'lifterlms_save_custom_user_field_my_custom_field_id', 'my_custom_field_save', 10, 3 );