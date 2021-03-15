<?php // Don't copy this line!
/**
 * llms-dashboard-welcome-message.php
 *
 * @since 2017-10-18
 */

function my_dashboard_welcome_message() {
	$student = llms_get_student();
	if ( ! $student ) {
		return;
	}
	$first_name = $student->get( 'first_name' );
	echo '<p>' . __( 'Hello', 'lifterlms' ) . ' <strong>' . $first_name . '</strong></p>';
}
add_action( 'lifterlms_student_dashboard_index', 'my_dashboard_welcome_message', 5 );