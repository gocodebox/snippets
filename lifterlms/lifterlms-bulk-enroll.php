<?php // Don't copy this line!
/**
 * lifterlms-bulk-enroll.php
 *
 * @since 2016-07-06
 */

// this should be the WordPress post id of your course / membership
$course_id = 123;


// locate all students in the WP User DB
// this will be any user who has signed up via a LifterLMS form
// you can remove the "role", delete the line completely, if you simply want to do all users
// check https://codex.wordpress.org/Class_Reference/WP_User_Query for more parameters
// you might want to also limit it to 500 or so at a time 
$users = new WP_User_Query( array(
	'role' => 'Student',
) );


// loop through all returned users and enroll in the course defined above
if ( ! empty( $users->results ) {

	foreach ( $users->results as $user ) {

		llms_enroll_student( $user->ID, $course_id );

	}

}