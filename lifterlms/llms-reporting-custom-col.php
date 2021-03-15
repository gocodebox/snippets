<?php // Don't copy this line!
/**
 * add access plan column to course student list
 *
 * @since 2018-04-25
 */
/**
 * Output data for a custom column on the student reporting table/export
 * @param    string     $value    default value being output
 * @param    string     $key      name of the custom field being output
 * @param    obj        $student  LLMS_Student for the row
 * @param    string     $context  output context "display" or "export"
 * @param    obj        $table    instance of the LLMS_Table_Course_Students
 * @return   mixed
 */
function my_students_table_column_data( $value, $key, $data, $context, $table ) {
	if ( 'access_plan' === $key ) {

		$order = $data->get_enrollment_order( $table->course_id );
		if ( $order ) {

			$value = sprintf( '%1$s (#%2$d)',  $order->get( 'plan_title' ), $order->get( 'plan_id' ) );

			if ( 'display' === $context ) {
				$value = sprintf( '<a href="%2$s" target="_blank">%1$s</a>', $value, get_edit_post_link( $order->get( 'id' ) ) );
			}

		} else {

			$value = '&ndash;';

		}


	}
	return $value;
}
add_filter( 'llms_table_get_data_course-students', 'my_students_table_column_data', 10, 5 );

/**
 * Add custom columns to the main students reporting table
 * @param    [type]     $cols  [description]
 * @return   [type]
 * @since    [version]
 * @version  [version]
 */
function my_students_table_columns( $cols ) {
	$cols['access_plan'] = array(
		'title' => __( 'Access Plan', 'my-text-domain' ),
		'export_only' => true, // set to false to show display screens but include in exports
		'exportable' => true, // set to false to exclude from exports
	);
	return $cols;
}
add_filter( 'llms_table_get_course-students_columns', 'my_students_table_columns', 10 );