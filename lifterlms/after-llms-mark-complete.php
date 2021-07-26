<?php // Don't copy this line!

/**
 * Redirect a user to an arbitrary page on your site when 
 *
 * @since 2021-07-26
 *
 * @param int    $student_id  WP_User ID of the student
 * @param int    $object_id   WP_Post ID of a course, lesson, section, etc...
 * @param string $object_type Type of WP_Post from $object_id.
 * @return void
 */
function my_course_completion_redirect( $student_id, $object_id, $object_type ) {

    // Skip other courses, sections, etc...
    if ( 'lesson' !== $object_type ) {
        return;
    }

    // Make sure the lesson exists (just in case).
    $lesson = llms_get_post( $object_id );
    if ( ! $lesson ) {
        return;
    }

    // Make sure the course exists, just in case.
    $course = $lesson->get_course();
    if ( ! $course ) {
        return;
    }

    // Check if the completed lesson is the last lesson in the course.
    $lessons = array_reverse( $course->get_lessons( 'ids' ) );
    if ( $object_id !== $lessons[0] ) {
        return;
    }

    // Perform the redirect.
    llms_redirect_and_exit( 'https://mysite.com/path/to/page' );

}
add_action( 'after_llms_mark_complete', 'my_course_completion_redirect', 100, 3 );
