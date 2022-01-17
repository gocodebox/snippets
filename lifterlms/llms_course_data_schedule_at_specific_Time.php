<?php
/**
 * Modifies the schedule for the LifterLMS course data background process.
 * 
 * This processor is a resource-intensive PHP process which gathers data like number of enrolled students,
 * average progress, and average grade and caches the results for display on reporting screens.
 *
 * The processor could hog server resources, especially on large active websites.
 *
 * By default the process will run in next-to-real time on smaller websites and will be throttled to run
 * no more than every 4 hours on larger websites. This code snippet is designed to reschedule this event
 * to only run during a requested window (ideally off-peak from your site's normal usage).
 *
 * @since 2022-01-17
 *
 * @link https://developer.wordpress.org/reference/hooks/schedule_event/
 *
 * @param boolean|stdClass $event An object containing the event's data or `false` to cancel scheduling.
 * @return stdClass|boolean
 */
function my_llms_course_data_calc_schedule( $event ) {

    if ( ! empty( $event->hook ) && 'llms_calculate_course_data' == $event->hook ) {

        $preferred_hour = 0; // Schedule to start at midnight.
        $scheduled_hour = (int) date( 'H', $event->timestamp ); // Hour when the event was actually scheduled.

        // If the preferred hour does not match the scheduled hour, reschedule it.
        if ( $preferred_hour !== $scheduled_hour ) {

            // Create a timestamp for the current day
            $new_timestamp = mktime( $preferred_hour, 0, 0 );

            // The hour has already passed for today so schedule it for tomorrow.
            if ( $new_timestamp <= time() ) {
                $new_timestamp += DAY_IN_SECONDS;
            }

            $event->timestamp = $new_timestamp;

        }

    }

    return $event;

}
add_filter( 'schedule_event', 'my_llms_course_data_calc_schedule' );
