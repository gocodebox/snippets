<?php // Don't copy this line!
/**
 * llms_show_preview_excerpt_ait.php
 *
 * @since 2016-11-28
 */

/**
 * Display lesson excerpts on course syllabus but NOT on next / previous tiles on lesson pages
 */
function my_lesson_preview_function( $show ) {
  if ( is_course() ) {
    return true;
  }
  return false;
}
// disables lesson short description in the lesson preview tiles
add_filter( 'llms_show_preview_excerpt', 'my_lesson_preview_function' );