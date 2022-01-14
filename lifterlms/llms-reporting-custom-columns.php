<?php // Don't copy this line!
/**
 * llms-reporting-custom-columns.php
 *
 * @since 2018-01-12
 * @since 2021-01-14 Switched `export_only` to `false`.
 */

/**
 * Output data for a custom column on the student reporting table/export.
 *
 * @param string       $value   Default value being output.
 * @param string       $key     Name of the custom field being output.
 * @param LLMS_Student $student Student object for the row.
 * @param string       $context Output context "display" or "export".
 * @return mixed The column value to be output.
 */
function my_students_table_column_data( $value, $key, $data, $context ) {

	if ( 'my_custom_field' === $key ) {
		$value = get_user_meta( $data->get_id(), $key, true );
	}

	return $value;

}
add_filter( 'llms_table_get_data_students', 'my_students_table_column_data', 10, 4 );

/**
 * Add custom columns to the main students reporting table
 *
 * @param array[] $cols Array of existing columns.
 * @return array[]
 */
function my_students_table_columns( $cols ) {

	$cols['my_custom_field'] = array(
		'title'       => __( 'My Custom Field', 'my-text-domain' ),
		'export_only' => false, // Set to true to hide from screens but still include in exports.
		'exportable'  => true, // Set to false to exclude from exports.
	);

	return $cols;

}
add_filter( 'llms_table_get_students_columns', 'my_students_table_columns', 10 );
