<?php // Don't copy this line!
/**
 * Do not allow group leaders to manage group information.
 * See https://lifterlms.com/docs/group-member-roles/#caps-table for more information on capabilities.
 *
 * @since 2024-10-21
 */
function my_groups_user_has_cap_leader_cannot_manage_group_information( $allcaps, $caps, $args ) {
	$cap = array_pop( $caps );

	// Only do this for the manage group information capability.
	if ( 'manage_group_information' !== $cap ) {
		return $allcaps;
	}

	if ( ! empty( $args[1] ) && ! empty( $args[2] ) && LLMS_Groups_Post_Type::POST_TYPE === get_post_type( $args[2] ) ) {
		$group_role = LLMS_Groups_Enrollment::get_role( $args[1], $args[2] );
		if ( 'leader' === $group_role ) {
			$allcaps[ $cap ] = false;
		}
	}

	return $allcaps;
}
// Add the filter with a higher priority than the original filter.
add_filter( 'user_has_cap', 'my_groups_user_has_cap_leader_cannot_manage_group_information', 20, 3 );
