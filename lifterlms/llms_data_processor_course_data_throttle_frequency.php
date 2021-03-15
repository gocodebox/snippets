<?php // Don't copy this line!
/**
 * llms_data_processor_course_data_throttle_frequency.php
 *
 * @since 2018-02-12
 */
/**
 * Change the frequencly of course data processing on sites throttling the frequency of data calculations
 * @param    int     $frequency  default frequency (HOUR_IN_SECONDS * 4)
 * @return   int
 */
function my_llms_data_processor_course_data_throttle_frequency( $frequency ) {
	return DAY_IN_SECONDS; // must return a # of seconds, try WP time constants (https://codex.wordpress.org/Easier_Expression_of_Time_Constants)
}
add_filter( 'llms_data_processor_course_data_throttle_frequency', 'my_llms_data_processor_course_data_throttle_frequency' );