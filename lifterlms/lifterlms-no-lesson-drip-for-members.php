<?php // <- do not copy this line.
/**
 * lifterlms-no-lesson-drip-for-members.php
 *
 * @since 2022-04-25
 */
add_filter(
	'llms_get_lesson_drip_method',
	function( $value, $lesson ) {
		$course_id     = 221;
		$membership_id = 213;
		/**
		 * Disable drip:
		 * - for all the lessons of the course with id $course_id
		 * - if the current student is a member of the membership with id $membership_id.
		 */
		if ( $course_id === $lesson->get( 'parent_course' ) && llms_is_user_enrolled( get_current_user_id(), $membership_id ) ) {
			$value = ''; // No drip method.
		}
		return $value;
	},
	10,
	2
);
