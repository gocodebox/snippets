<?php
/**
 * Filter to customize settings associated with LifterLMS Basic Notifications.
 * 
 * https://lifterlms.com/docs/lifterlms-filters/#llms_notifications_settings
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function my_llms_notifications_settings( $settings ) {
	$settings['heartbeat_interval'] = 60000;
	return $settings;
}
add_filter( 'llms_notifications_settings', 'my_llms_notifications_settings', 10, 1 );
