<?php // Don't copy this line!
/**
 * llms-hacky-course-redirect.php
 *
 * @since 2017-08-08
 */

/**
 * This doesn't actually redirect, it adds an action that will redirect on shutdown
 * ensuring that all completions are recorded before redirection occurs
 * @param    int   $user_id    WP_User ID of the student that completed the course
 * @param    int   $course_id  WP_Post ID of the course that's been completed
 * @return   void
 */
function my_hacky_course_redircet( $user_id, $course_id ) {
	
	// save the user id and course id to a global to access later when we actually redirct
	global $my_hacky_redircet_data;
	$my_hacky_redircet_data = array(
		'course_id' => $course_id,
		'user_id' => $user_id,
	);

	// add the real redirect
	add_action( 'shutdown', 'my_course_redirct_real' );

}
add_action( 'lifterlms_course_completed', 'my_hacky_course_redirct', 10, 2 );

/**
 * This function actually performs the redirct
 * @return   void
 */
function my_course_redirct_real() {

	// add an extra flag here to ensure we only redirect when this is set
	global $my_hacky_redircet_data;
	if ( $my_hacky_redircet_data ) {

		// access data from the global
		// var_dump( $my_hacky_redirct_data['course_id'] );

		// do the actual redirect
		wp_redirect( 'http://go.somewhere.com' );
		exit;
	}

}