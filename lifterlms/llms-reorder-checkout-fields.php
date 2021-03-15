<?php // Don't copy this line!
/**
 * llms-reorder-checkout-fields.php
 *
 * @since 2018-01-13
 */

/**
 * Reorder checkout fields so email & password are at the end
 * @param    array      $fields  array of field data
 * @param    string     $screen  requested screen [checkout|registration]
 * @return   array
 */
function my_registration_field_order( $fields, $screen ) {

	// var_dump( $fields ); // uncomment to inspect the fields, (please don't ask me for their ids!)

	// only customize the order of registration fields
	if ( 'checkout' !== $screen ) {
		return $fields;
	}

	foreach ( $fields as $index => $data ) {

		if ( in_array( $data['id'], array( 'email_address', 'email_address_confirm', 'password', 'password_confirm', 'llms-password-strength-meter' ) ) ) {
			$fields[] = $data;
			unset( $fields[ $index ] );
		}

	}

	return $fields;


}
add_filter( 'lifterlms_get_person_fields', 'my_registration_field_order', 10, 2);