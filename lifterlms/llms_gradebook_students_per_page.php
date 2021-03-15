<?php // Don't copy this line!
/**
 * llms_gradebook_students_per_page.php
 *
 * @since 2016-12-30
 */
/**
 * Customize the number of students per page on the admin reporting table
 * @param    int     $num  default (20)
 * @return   int
 */
function my_results_per_page( $num ) {
	return 50;
}
add_filter( 'llms_gradebook_students_per_page', 'my_results_per_page' );