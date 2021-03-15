<?php // Don't copy this line!
/**
 * modify & remove fields from llms registration and checkout screens
 *
 * @since 2017-03-27
 */

/**
 * Move email & password fields to the bottom of the billing info box
 * @param    array     $fields  array of existing field definitions
 * @param    string    $screen  id of the field set being rendered
 * @return   array
 */
function my_lifterlms_get_person_fields( $fields, $screen ) {

	// var_dump( $fields ); // uncomment this line to see & inspect all the fields

	// ensure we're only modifying the checkout and registration fieldsets
	if ( in_array( $screen, array( 'checkout', 'registration' ) ) ) {

		// loop through all existing fields
		foreach ( $fields as $i => $field ) {

			$move_fields = array( 'email_address', 'email_address_confirm', 'password', 'password_confirm', 'llms-password-strength-meter' );
			if ( in_array( $field['id'], $move_fields ) ) {
				$fields[] = $field;
				unset( $fields[ $i ] );
			}

		}


	}
	return $fields;

}
add_filter( 'lifterlms_get_person_fields', 'my_lifterlms_get_person_fields', 10, 2 );