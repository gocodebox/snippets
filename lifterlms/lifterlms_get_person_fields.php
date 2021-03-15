<?php // Don't copy this line!
/**
 * modify & remove fields from llms registration and checkout screens
 *
 * @since 2017-03-27
 */
/**
 * Remove Country & State fields from LifterLMS Checkout and Registration
 * @param    array     $fields  array of existing field definitions
 * @param    string    $screen  id of the field set being rendered
 * @return   array
 */
function my_lifterlms_get_person_fields( $fields, $screen ) {

	// ensure we're only modifying the checkout and registration fieldsets
	if ( in_array( $screen, array( 'checkout', 'registration' ) ) ) {

		// want to remove more fields? get the field id by inspecting the "$fields" variable
		// and then add that id to this array!
		$remove = array( 'llms_billing_state', 'llms_billing_country' );

		// loop through all existing fields
		foreach ( $fields as $i => $field ) {

			// ensure that the ID of the field is one we want to remove
			if ( isset( $field['id'] ) && in_array( $field['id'], $remove ) ) {

				// remove it!
				unset( $fields[ $i ] );

			}

		}

	}

	return $fields;

}
add_filter( 'lifterlms_get_person_fields', 'my_lifterlms_get_person_fields', 10, 2 );