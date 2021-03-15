<?php // Don't copy this line!
/**
 * lifterlms_get_user_custom_field_value_{$field_id).php
 *
 * @since 2016-05-05
 */

/**
 * Override the default value of a custom field retrieved from the usermeta table
 *
 * note that this filter isn't necessary but *can* be used if you don't simply
 * want to retrieve the value of the field from the usermeta table
 * 
 * @param  mixed  $value     value from the usermeta table
 * @param  obj    $user      Instance of WP_User for whom data is being retrieved
 * @param  string $field_id  id / name of the field
 * @return mixed
 */
function my_custom_field_value( $value, $user, $field_id ) {

	// do something with the field value, for example replace underscores with spaces because why not?
	$value = str_replace( '_', ' ', $value );

	return $value;

}
add_filter( 'lifterlms_get_user_custom_field_value_my_custom_field_id', 'my_custom_field_value', 10, 3 ); // "my_custom_field_id" should be replaced with your field's id!