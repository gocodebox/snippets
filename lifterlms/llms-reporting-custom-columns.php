<?php // Don't copy this line!
/**
 * Output data for a custom column on the student reporting table/export.
 *
 * Since certain fields, like a checkbox field, are stored as an array,
 * this example detects the field type and outputs the expected single value
 * or a comma-separated list (if needed).
 *
 * Learn more at: https://lifterlms.com/docs/adding-custom-columns-reporting-tables-export-files/
 *
 * @param string       $value   Default value being output.
 * @param string       $key     Name of the custom field being output.
 * @param LLMS_Student $data    Student object for the row.
 * @param string       $context Output context "display" or "export".
 * @return mixed The column value to be output.
 */
function my_students_table_column_for_data( $value, $key, $data, $context ) {

	// The array of custom field keys you want to include.
	$field_usermeta_keys = array(
		'my_custom_checkbox_field_1',
		'my_custom_text_field_2',
	);

	foreach ( $field_usermeta_keys as $field_usermeta_key ) {
		if ( $field_usermeta_key === $key ) {
			$options = (array) get_option( LLMS_CF_Fields_Tracker::TRACKER_OPTION_NAME, array() );

			$selected_value = get_user_meta( $data->get_id(), $key, true );

			if ( is_array( $selected_value ) ) {
				// Since the value is an array, loop through and translate each value
				$labels = array();
				foreach ( (array) get_user_meta( $data->get_id(), $key, true ) as $selected_value ) {
					if ( ! $selected_value ) {
						continue;
					}

					// Get the label for the selected value
					$labels[] = $options[ $field_usermeta_key ]['options'][ $selected_value ] ?? $selected_value;
				}
				return implode( ', ', $labels );
			}

			// Return the field's value
			return $options[ $field_usermeta_key ]['options'][ $selected_value ] ?? $selected_value;
		}
	}

	return $value;

}
add_filter( 'llms_table_get_data_students', 'my_students_table_column_for_data', 10, 4 );

/**
 * Add custom columns to the main students reporting table
 *
 * @param array[] $cols Array of existing columns.
 * @return array[]
 */
function my_students_table_columns( $cols ) {

	// Add a new column for each custom field key you want to include.
	$cols['my_custom_checkbox_field_1'] = array(
		'title'       => __( 'My Checkbox Field', 'my-text-domain' ),
		'export_only' => false, // Set to true to hide from screens but still include in exports.
		'exportable'  => true, // Set to false to exclude from exports.
	);

	$cols['my_custom_text_field_2'] = array(
		'title'       => __( 'My Text Field', 'my-text-domain' ),
		'export_only' => false, // Set to true to hide from screens but still include in exports.
		'exportable'  => true, // Set to false to exclude from exports.
	);

	return $cols;

}
add_filter( 'llms_table_get_students_columns', 'my_students_table_columns', 10 );
