<?php // Don't copy this line!
/**
 * llms_ck_cache_duration.php
 *
 * @since 2016-12-19
 */
/**
 * Modify the LifterLMS ConvertKit Cache Duration to stroe results for 15 minutes
 * @param  int $duration   duration in seconds
 * @return int             modified duration in seconds
 */
function my_llms_ck_cache_duration_handler( $duration ) {
	
	return 60 * 15; // 900 seconds, or 15 minutes

}
add_filter( 'llms_ck_cache_duration', 'my_llms_ck_cache_duration_handler' );