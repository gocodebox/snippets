<?php // Don't copy this line!
/**
 * modify & remove fields from llms registration and checkout screens
 *
 * @since 2017-03-27
 */

/**
 * Update the placeholder of the phone field.
 * 
 * @param array[] $fields Array of existing field definitions
 * @param string  $screen ID of the field set being rendered.
 * @return array[]
 */
function my_lifterlms_get_person_fields( $fields, $screen ) {

	// var_dump( $fields ); // uncomment this line to see & inspect all the fields

	// Loop through all existing fields.
	foreach ( $fields as $i => &$field ) {

		// Change the placeholder for the phone field.
		if ( 'llms_phone' === $field['id'] ) {
			$field['placeholder'] = '1234567890'; // Enter custom placeholder here.
		}

	}

	return $fields;

}
add_filter( 'lifterlms_get_person_fields', 'my_lifterlms_get_person_fields', 10, 2 );