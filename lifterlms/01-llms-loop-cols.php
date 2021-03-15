<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/can-change-number-columns-displayed-course-membership-catalog/
 *
 * @since 2016-10-17
 */

/**
 * Customize the number of columns displayed on LifterLMS Course and Membership Catalogs
 * Note that LifterLMS has native support for 1 - 6 columns
 * If you require 7 or more columns you will need to write custom CSS to accommodate
 * @param    int     $cols  default number of columns (3)
 * @return   int
 */
function my_llms_loop_cols( $cols ) {
	return 2; // change this to be the number of columns you want
}
add_filter( 'lifterlms_loop_columns', 'my_llms_loop_cols' );
