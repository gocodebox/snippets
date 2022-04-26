<?php // <- do not copy this line.
/**
 * lifterlms-no-lesson-drip-for-specific-roles.php
 *
 * @since 2022-04-25
 */
add_filter(
	'llms_page_restricted',
	function( $restricted, $post_id ) {

		$no_drip_roles = array(
			'instructors_assistant',
		);

		if ( is_user_logged_in() && ! empty( $restricted['is_restricted'] ) && 'lesson_drip' === $restricted['reason'] ) {
			$user = llms_get_student();
			// Users with a role included in `$no_drip_roles` can bypass drip restrictions.
			$restricted['is_restricted'] = empty( array_intersect( $user->get_user()->roles, $no_drip_roles ) );
		}
		return $restricted;

	},
	10,
	2
);
