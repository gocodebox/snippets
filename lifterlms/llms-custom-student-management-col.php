<?php // Don't copy this line!
/**
 * add an email column to the LifterLMS student management table on courses/memberships
 *
 * @since 2017-12-15
 */

// add the custom column
add_filter( 'llms_table_get_student-management_columns', function( $cols ) {

	// get the numeric index of the item in the array that you want to add custom col after
	$pos = array_search( 'name', array_keys( $cols ) ) + 1;

	return array_slice( $cols, 0, $pos, true ) + array(
		'my_email' => __( 'Email', 'my-text-domain' ), // add custom column here
	) + array_slice( $cols, $pos, count( $cols ) - 1, true );

}, 10, 1 );

// output data for the custom column
add_filter( 'llms_table_get_data_student-management', function( $value, $key, $student ) {

	if ( 'my_email' === $key ) {

		$value = $student->get( 'user_email' );

	}

	return $value;

}, 10, 3 );