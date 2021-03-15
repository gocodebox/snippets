<?php // Don't copy this line!
/**
 * llms-get-user-memberships.php
 *
 * @since 2018-10-24
 */

// get a new student object to work with
// this class will work with any WP User regardless of their roles/caps
$user_id = get_current_user_id();
$student = llms_get_student( $user_id );

// if a student record wasn't found $student will be false
if ( $student ) {
  
  $memerships = $student->get_membership_levels(); // array of student's membership IDs
  
  // loop through them and do something?
  foreach ( $memberships as $membership_id ) {
    
    // do a thing with the membership...
    
  }
  
  
}