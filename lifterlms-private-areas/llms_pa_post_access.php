<?php // Don't copy this line!
/**
 * Modify the default capability required to access LifterLMS Private Posts and Automations
 *
 * @since 2019-04-03
 */

/**
 * Modify the default capability required to access LifterLMS Private Posts and Automations
 *
 * @param string $cap Default capability (manage_options)
 * @return string
 */
function my_custom_pa_cap( $cap ) {
	return 'manage_lifterlms';
}
add_filter( 'llms_pa_post_access', 'my_custom_pa_cap' );
add_filter( 'llms_pa_post_automation_access', 'my_custom_pa_cap' );