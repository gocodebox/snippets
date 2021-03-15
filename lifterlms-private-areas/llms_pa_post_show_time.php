<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */
/**
 * Do not show the posted time for PA posts
 */
add_filter( 'llms_pa_post_show_time', '__return_false' );