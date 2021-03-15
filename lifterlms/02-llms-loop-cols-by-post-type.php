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
 *
 * This version displays a different number of columns on Course & Membership Catalogs
 *
 * @param    int     $cols  default number of columns (3)
 * @return   int
 */
function my_llms_loop_cols( $cols ) {
	if ( is_post_type_archive( 'course' ) ) {
		return 4;
	} elseif ( is_post_type_archive( 'llms_membership' ) ) {
		return 2;
	}
  return $cols;
}
add_filter( 'lifterlms_loop_columns', 'my_llms_loop_cols' );