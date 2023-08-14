<?php // <- don't copy this line.

/**
 * Display a back to course link before the quiz summary.
 *
 * @since 08/14/2023
 */

add_action(
	'lifterlms_single_quiz_before_summary',
	function() {
		global $post;

		$quiz = llms_get_post( $post );
		if ( ! is_a( $quiz, 'LLMS_Quiz' ) ) {
			return;
		}
		printf( __( '<p class="llms-parent-course-link">Back to: <a class="llms-lesson-link" href="%1$s">%2$s</a></p>', 'lifterlms' ), get_permalink( $quiz->get_course()->get( 'id' ) ), get_the_title( $quiz->get_course()->get( 'id' ) ) );
	},
	7
);
