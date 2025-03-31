<?php // Don't copy this line!
/**
 * Modify the amount of time after starting a quiz attempt that a student can resume it, if enabled.
 */

add_filter( 'llms_quiz_attempt_resume_time_period', function() {
  // Amount of time in hours. Default is 24 (one day).
	return 48;
} );
