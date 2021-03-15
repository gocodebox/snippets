<?php // Don't copy this line!
/**
 * llms_ck_cache_duration-disable.php
 *
 * @since 2016-12-19
 */
/**
 * Disable the LifterLMS ConvertKit Cache
 * @param  int $duration   duration in seconds
 * @return int             modified duration in seconds
 */
function my_llms_ck_cache_duration_disabler( $duration )
{
	
	return 0;

}
add_filter( 'llms_ck_cache_duration', 'my_llms_ck_cache_duration_disabler' );