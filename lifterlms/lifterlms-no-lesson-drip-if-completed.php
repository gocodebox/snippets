<?php // <- do not copy this line.
/**
 * lifterlms-no-lesson-drip-if-completed.php
 *
 * @since 2021-10-26
 */
add_filter(
  'llms_page_restricted',
  function( $restricted, $post_id ) {
    if ( is_user_logged_in() && ! empty( $restricted['is_restricted'] ) && 'lesson_drip' === $restricted['reason'] ) {
      $restricted['is_restricted'] = ! llms_is_complete( get_current_user_id(), $post_id, 'lesson' );
    }
    return $restricted;
  },
  10,
  2
);
