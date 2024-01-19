<?php // Don't copy this line!
/**
 * Output data for a custom column on the student reporting table/export.
 *
 * Since checkboxes can have multiple options selected, this example will also output
 * a comma-separated list of the selected options if needed.
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

	// Add each custom field key from Data Storage > Usermeta key found in the Block options (ie. checkbox_14_1)
	$field_usermeta_keys = array(
		'my_custom_checkbox_field',
// Add any additional fields here, for example:
//        'my_custom_field',
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

					// Get the label for the selected checkbox
					$labels[] = $options[ $field_usermeta_key ]['options'][ $selected_value ] ?? $selected_value;
				}
				return implode( ', ', $labels );
			}

			// This could either be a simple value, such as a Text input, or
			// from something like a single-option select box or radio input.
			// Try to find the selected value in the custom field options and if it doesn't exist, use the value as-is.
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

	// You can add multiple columns here, just copy the array below and change the key and title

	// Replace my_custom_checkbox_field with the Data Storage > Usermeta key found in the Block options (ie. checkbox_14_2)
	$cols['my_custom_checkbox_field'] = array(
		'title'       => __( 'My Custom Checkbox Field', 'my-text-domain' ),
		'export_only' => false, // Set to true to hide from screens but still include in exports.
		'exportable'  => true, // Set to false to exclude from exports.
	);

	// Here's an example of another one, just remove the comment slashes to enable it
//    $cols['my_custom_field'] = array(
//        'title'       => __( 'My Custom Field', 'my-text-domain' ),
//        'export_only' => false, // Set to true to hide from screens but still include in exports.
//        'exportable'  => true, // Set to false to exclude from exports.
//    );

	return $cols;

}
add_filter( 'llms_table_get_students_columns', 'my_students_table_columns', 10 );
