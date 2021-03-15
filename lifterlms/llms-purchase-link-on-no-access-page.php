<?php // Don't copy this line!
/**
 * llms-purchase-link-on-no-access-page.php
 *
 * @since 2016-06-14
 */
add_action( 'lifterlms_no_access_main_content', function( ) {

	global $post;

	if ( ! empty( $post->ID ) && 'lesson' === get_post_type() ) {
		$lesson = new \LLMS_Lesson( $post->ID ); // use this if added to the LaunchPad functions.php file
		// $lesson = new LLMS_Lesson( $post->ID ); // use this anywhere else
		$course_id = $lesson->get_parent_course();
		if ( $course_id ) {
			$global_temp = $post;
			$post = get_post( $course_id );
			// code here will go above the buttons
			llms_get_template( 'course/purchase-link.php' );
			// code here will go below the buttons
			$post = $global_temp;
			unset( $global_temp );
		}

	}

} );