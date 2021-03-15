<?php // Don't copy this line!
/**
 * llms-after-start-quiz-html.php
 *
 * @since 2016-05-23
 */
/**
 * Add a Return to Account and Return to Course button at the bottom of a quiz after the "Start Quiz" Button
 * @return void
 */
function llms_after_quiz_button() {

	global $quiz;
	$lesson = new LLMS_Lesson( $lessonid = $quiz->get_assoc_lesson( get_current_user_id() ) );
	$course = $lesson->get_parent_course();

	echo '<a class="button llms-button" href="' . get_permalink( $course ) . '">' . __( 'Return to Course', 'my-text-domain' ) . '</a>'; // return to course
	echo '<a class="button llms-button" href="' . get_permalink( llms_get_page_id( 'myaccount' ) ) . '">' . __( 'Return to My Account', 'my-text-domain' ) . '</a>'; // return to account

}
add_action( 'lifterlms_after_start_quiz', 'llms_after_quiz_button' );