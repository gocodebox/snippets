<?php // Don't copy this line!
/**
 * llms_data_processor_course_dat_throttle_count.php
 *
 * @since 2018-02-12
 */
/**
 * If 1000 or more students on a site, throttle the frequency of course data bg calculations
 * @param    int     $count  default student count (2500)
 * @return   int
 */
function my_llms_data_processor_course_dat_throttle_count( $count ) {
	return 1000;
}
add_filter( 'llms_data_processor_course_dat_throttle_count', 'my_llms_data_processor_course_dat_throttle_count' );