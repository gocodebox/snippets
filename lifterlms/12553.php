<?php // Don't copy this line!
/**
 * 12553.php
 *
 * @since 2016-09-12
 */
add_filter( 'lifterlms_membership_restricted_message', function( $msg ) {

  if ( get_current_user_id() {
  
    $msg = 'It looks like you are either not logged in or have not already purchased this course! The course or lesson you’re trying to view is available either as an individual purchase or as part of a course bundle or membership. Please <a href="/my-account/">Log In</a> to your account if you have not already done so. If you have not already purchased the course, the bundle or if you are not a FRENCH HOUR member, the system will prompt you to enroll in the course.';

  }
  
  return $msg;

}, 10, 1 );