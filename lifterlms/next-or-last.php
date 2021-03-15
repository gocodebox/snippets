<?php // Don't copy this line!
/**
 * next-or-last.php
 *
 * @since 2017-04-19
 */
$course_id = $c->get( 'id' );
$next_id = $student->get_next_lesson( $course_id );
$next_lesson = llms_get_post( $next_id );
$lesson_id = ( $next_lesson && $lesson->is_available() ) ? $next_id : $student->get_last_completed_lesson( $course_id );
?>
<div>
<a href="<?php echo get_permalink( $lesson_id ); ?>"><?php echo apply_filters( 'lifterlms_my_courses_course_button_text', __( 'View Course', 'lifterlms' ) ); ?></a>
</div>