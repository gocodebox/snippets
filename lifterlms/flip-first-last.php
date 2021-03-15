<?php // Don't copy this line!
/**
 * modify & remove fields from llms registration and checkout screens
 *
 * @since 2017-03-27
 */
/**
 * Flip the order of first and last name fields
 * @param    array     $fields  array of existing field definitions
 * @param    string    $screen  id of the field set being rendered
 * @return   array
 */
function my_lifterlms_get_person_fields( $fields, $screen ) {
	// var_dump( $fields ); // uncomment this line to see & inspect all the fields
	// ensure we're only modifying the checkout and registration fieldsets
	if ( in_array( $screen, array( 'checkout', 'registration' ) ) ) {

		$new_fields = array();
		$first_temp = null;

		// loop through all existing fields
		foreach ( $fields as $i => $field ) {

			if ( 'first_name' === $field['id'] ) {
				$field['last_column'] = true;
				$first_temp = $field;
				continue;
			}

			if ( 'last_name' === $field['id'] ) {
				$field['last_column'] = false;
			}
			$new_fields[] = $field;
			if ( 'last_name' === $field['id'] ) {
				$new_fields[] = $first_temp;
			}

		}

		return $new_fields;

	}
	return $fields;
}
add_filter( 'lifterlms_get_person_fields', 'my_lifterlms_get_person_fields', 10, 2 );