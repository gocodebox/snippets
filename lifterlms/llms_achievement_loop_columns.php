<?php // Don't copy this line!
/**
 * llms_achievement_loop_columns.php
 *
 * @since 2017-10-21
 */

/**
 * Modify the number of columns used when looping achievements on the student dashboard
 * We have CSS in the core for anywhere from 1-5 columns
 * if you need more than 5 columns you'll want to add additional custom css to acommodate:
 * .lifterlms ul.llms-achievements-loop.loop-cols-6 li.llms-achievement-loop-item { width: 16.666%; }
 * @param    int     $cols  number of columns (default is 4)
 * @return   int
 */
function my_achievement_loop_columns( $cols ) {
	return 5;
}
add_filter( 'llms_achievement_loop_columns', 'my_achievement_loop_columns', 999, 1 );
