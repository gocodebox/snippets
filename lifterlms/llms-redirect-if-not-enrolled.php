<?php // Don't copy this line!
/**
 * redirect users not enrolled in the lesson's course to an arbitrary url
 *
 * @since 2016-07-26
 */

if ( ! llms_is_user_enrolled( get_current_user_id(), get_the_ID() ) ) {
  
  wp_redirect( 'http://lifterlms.com' );
  exit;
  
}
