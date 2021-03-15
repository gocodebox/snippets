<?php // Don't copy this line!
/**
 * lifterlms_lesson_completed.php
 *
 * @since 2016-11-07
 */
/**
 * Add a custom value to a user meta field on lesson completion
 * @param    int     $user_id    WP User ID
 * @param    int     $lesson_id  WP Post ID of the lesson
 * @return   void
 */
function my_lesson_completion_action( $user_id, $lesson_id ) {
	update_user_meta( $user_id, 'last_lesson_completed', $lesson_id );
}
add_action( 'lifterlms_lesson_completed', 'my_lesson_completion_action', 10, 2 );