<?php // Don't copy this line!
/**
 * llms-is-student-enrolled-in-one-membership.php
 *
 * @since 2017-01-04
 */
// get a new student object to work with
// this class will work with any WP User regardless of their roles/caps
$user_id = get_current_user_id();
$student = llms_get_student( $user_id );

// if there's no logged in user $student will be "false"
if ( $student ) {
  
  if ( $student->get_membership_levels() ) {
    // user is an active member of at least one membership
  } else {
    // user is not in any memberships
  }  
  
}
