<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */

/**
 * Disable HTML quick tags for discussion (comments) on PA Posts
 */
add_filter( 'llms_pa_html_discussion', '__return_false' );