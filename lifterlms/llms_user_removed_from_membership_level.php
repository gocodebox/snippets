<?php // Don't copy this line!
/**
 * llms_user_removed_from_membership_level.php
 *
 * @since 2016-11-30
 */
/**
 * Do something cool when user is removed from a membership
 * @param    int     $student_id      WP User ID
 * @param    int     $membership_id   WP Post ID of the Membership
 * @return   void
 */
function my_unenrollment_acton( $student_id, $membership_id ) {

	// add a usermeta value that the student used to be in this membership
	$past = get_user_meta( $student_id, 'past_memberships', true );
	if ( ! $past ) {
		$past = array();
	}

	array_push( $past, $membership_id );

	update_user_meta( $student_id, 'past_memberships', $past );
	
}
add_action( 'llms_user_removed_from_membership_level', 'my_unenrollment_acton', 10, 2 );