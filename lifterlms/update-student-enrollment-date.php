<?php
/**
 * Updates the date a student was started a course or membership.
 *
 * @since 2022-03-10
 *
 * @param int    $user_id WP_User ID of the student to update.
 * @param int    $post_id WP_Post ID of the course or membership.
 * @param string $date    Enrollment date. Must be in MySQL date format: Y-m-d H:i:s.
 * @return void
 */
function my_update_student_enrollment_date( $user_id, $post_id, $date ) {

    global $wpdb;

    // Locates the existing userpostmeta record for the enrollment start date.
    $metas = _llms_query_user_postmeta( $user_id, $course_id, '_start_date', 'yes' );
    foreach ( $metas as $meta ) {

        // Updates the date.
        $wpdb->update(
            "{$wpdb->prefix}lifterlms_user_postmeta",
            array( 'updated_date' => $date ),
            array( 'meta_id' => $meta->meta_id ),
            array( '%s' ),
            array( '%d' )
        );

    }
}
