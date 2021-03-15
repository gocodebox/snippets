<?php // Don't copy this line!
/**
 * llms_user_added_to_membership_level.php
 *
 * @since 2016-11-30
 */
/**
 * Do something cool upon user enrollment in a membership
 * @param    int     $student_id      WP User ID
 * @param    int     $membership_id   WP Post ID of the Membership
 * @return   void
 */
function my_enrollment_acton( $student_id, $membership_id ) {

	// add the last course a user enrolled in to the usermeta table
	update_user_meta( $student_id, 'last_enrollment_id', $membership_id );

}
add_action( 'llms_user_added_to_membership_level', 'my_enrollment_acton', 10, 2 );