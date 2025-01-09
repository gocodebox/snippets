<?php
/**
 * Add custom columns and output data on the Courses > Students reporting for course export.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
/**
 * Output data for a custom column on the student reporting for course export.
 *
 * @param string $value   Default value being output
 * @param string $key     Name of the custom field being output
 * @param obj    $student LLMS_Student for the row
 * @param string $context Output context "display" or "export"
 * @return mixed
 */
function course_students_table_column_data( $value, $key, $data, $context ) {

	if ( 'test' === $key ) {
		$value = 'Some Test';
	}

	return $value;

}
add_filter( 'llms_table_get_data_course-students', 'course_students_table_column_data', 10, 4 );

/**
 * Add custom columns to the course students reporting table.
 *
 * @param array $cols Columns.
 * @return array $cols Columns.
 */
function course_students_table_columns( $cols ) {

	$cols['test'] = array(
		'title'       => __( 'Test Test', 'lifterlms' ),
		'export_only' => false, // set to false to show display screens but include in exports
		'exportable'  => true, // set to false to exclude from exports
	);

	return $cols;
}
add_filter( 'llms_table_get_course-students_columns', 'course_students_table_columns', 10 );
