<?php // Don't copy this line!
/**
 * Custom post meta output for LifterLMS Courses, Lessons, Quizzes
 *
 * @since 2016-07-05
 */
/**
 * Custom post meta output for LifterLMS Courses, Lessons, Quizzes
 */
function et_divi_post_meta() {

	$post_type = get_post_type();
	// this is a LifterLMS Course
	if ( 'course' === $post_type || 'lesson' === $post_type || 'llms_quiz' === $post_type ) {

		// echo your custom meta content here
		// or leave it empty to not display anything

	}
	// this is everything else, default of the Divi function
	else {

		$postinfo = is_single() ? et_get_option( 'divi_postinfo2' ) : et_get_option( 'divi_postinfo1' );

		if ( $postinfo ) {
			echo '<p class="post-meta">';
			echo et_pb_postinfo_meta( $postinfo, et_get_option( 'divi_date_format', 'M j, Y' ), esc_html__( '0 comments', 'Divi' ), esc_html__( '1 comment', 'Divi' ), '% ' . esc_html__( 'comments', 'Divi' ) );
			echo '</p>';
		}

	}

}