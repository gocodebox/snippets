<?php // Don't copy this line!

/**
 * Customize advanced video settings for automatic pause/resume.
 *
 * By default, when a user changes tabs (or the browser window loses focus), the video is automatically paused and
 * when the tab (or window) regains focus the video is automatically resumed.
 *
 * This can be used to disable this feature.
 *
 * @since [version]
 *
 * @param [type] $settings [description]
 * @return [type] [description]
 */
function my_llms_av_client_settings( $settings ) {

    if ( isset( $settings['av'] ) ) { // If Advanced videos isn't enabled the settings won't matter.

        // Disable automatic video pausing when the current tab loses focus.
        $settings['av']['pause_on_blur'] = false;

        // Disable automatic video resume when the current tab regains focus.
        $settings['av']['resume_on_focus'] = false;
    }

    return $settings;

}
add_filter( 'llms_events_get_client_settings', 'my_llms_av_client_settings' );