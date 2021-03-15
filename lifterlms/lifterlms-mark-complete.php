<?php // Don't copy this line!
/**
 * programmatically mark a lesson complete in LifterLMS
 *
 * @since 2016-08-18
 */

$lesson_id = 123; // WP Post ID of the Lesson
$user_id = 456; // WP User ID of the user

// instantiate a new lesson object
$lesson = new LLMS_Lesson( $lesson_id );

// mark the lesson as complete for the user
$lesson->mark_complete( $user_id );