<?php // Don't copy this line!
/**
 * llms-remove-quiz-attempt-results.php
 *
 * @since 2018-02-13
 */
/**
 * Prevent students from reviewing quiz attempts until they've attempted the quiz twice
 * @param    obj     $attempt  LLMS_Quiz_Attempt instance
 * @return   void
 */
function maybe_remove_quiz_results( $attempt ) {
	$student = llms_get_student();
	if ( ! $student ) {
		return;
	}
	$count = $student->quizzes()->count_attempts_by_quiz( $attempt->get( 'quiz_id' ) );
	if ( 1 === $count ) {
		remove_action( 'llms_single_quiz_attempt_results', 'lifterlms_template_quiz_attempt_results', 10 );
	}
}
add_action( 'llms_single_quiz_attempt_results', 'maybe_remove_quiz_results', 5 );