<?php // Don't copy this line!
/**
 * Add a timezone to a lesson drip restriction message in LifterLMS
 *
 * @since 2020-08-21
 */

/**
 * Add a timezone string to the end of the lesson drip availability message
 *
 * The default message is: "The lesson "{$LESSON_TITLE}" will be available on {$AVAILABLE_DATE}
 *
 * This filter converts the message to: "The lesson "{$LESSON_TITLE}" will be available on {$AVAILABLE_DATE} {$TIMEZONE}
 *
 * @since 2020-08-21
 *
 * @param string $msg         The default restriction message.
 * @param array  $restriction Associative array of restriction data from `llms_page_restricted()`.
 * @return string
 */
function my_llms_get_restriction_message( $msg, $restriction ) {
	
	// If this is a lesson drip restriction message, add the site's timezone.
	if ( is_array( $restriction ) && ! empty( $restriction['reason'] ) && 'lesson_drip' === $restriction['reason'] ) {
		$tz = 'PST'; // Update this to be the timezone of your choice.
		return $msg . ' ' . $tz;
	} 

	return $msg;
}
add_filter( 'llms_get_restriction_message', 'my_llms_get_restriction_message', 10, 2 );