<?php // Don't copy this line!
/**
 * lifterlms_validate_custom_user_field_{$field_id}.php
 *
 * @since 2016-05-05
 */

/**
 * Run custom validation against the field
 * If filter function returns a truthy, validation will stop, fields will not be saved,
 * and an error message will be displayed on screen
 *
 * This should return false or a string which will be used as the error message
 *
 * If false is returned, the field has "passed" validation (eg no errors)
 * 
 * @param  mixed  $error    false or error message string
 * @param  string $field_id field id or name
 * @param  obj    $user     Instace of WP_User
 * @return mixed
 */
function my_custom_field_validation( $error, $field_id, $user ) {

	// for example, lets make sure the field is numeric
	if ( ! is_numeric( $_POST[$field_id] ) ) {

		$error = __( 'ERROR: The value of "My Custom Field" must be numeric!', 'my-text-doamin' );

	}

	return $error;

}
add_filter( 'lifterlms_validate_custom_user_field_my_custom_field_id', 'my_custom_field_validation', 10, 3 );