<?php // Don't copy this line!
/**
 * llms-notifications-settings.php
 *
 * @since 2017-06-13
 */
function my_llms_notifications_settings( $settings ) {
	$settings['heartbeat_interval'] = 60000;
	return $settings;
}
add_filter( 'llms_notifications_settings', 'my_llms_notifications_settings', 10, 1 );