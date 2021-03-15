<?php // Don't copy this line!
/**
 * llms-quiz-data.php
 *
 * @since 2016-05-17
 */
$user_id = get_current_user_id(); // assuming you're looking at the current user but you can use a user id from any source here
$quiz_data = get_user_meta( $user_id, 'llms_quiz_data', true );
var_dump( $quiz_data ); // this will be a less crazy looking array of data