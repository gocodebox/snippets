<?php // Don't copy this line!
/**
 * llms-course-complete-redirect.php
 *
 * @since 2018-09-28
 */

function my_llms_mark_complete( $student_id, $object_id, $object_type, $trigger ) {
	if ( 'course' === $object_type ) {
		// $url = 'https://myurl.com/path'; // go to a generic url
		$url = llms_get_page_url( 'myaccount' ); // go to the dashboard
		wp_safe_redirect( $url );
	}
}
add_action( 'llms_mark_complete', 'my_llms_mark_complete', 999, 4 );