<?php // Do not copy this line.
/**
 * Filter the number of students per page displayed in Reporting -> Students table.
 *
 * @since 07-07-2023
 */
add_filter(
	'llms_table_students_per_page',
	function( $per_page ) {
		return 1;
	}
);
