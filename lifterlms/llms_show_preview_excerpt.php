<?php // Don't copy this line!
/**
 * llms_show_preview_excerpt.php
 *
 * @since 2016-11-28
 */

// disables lesson short description in the lesson preview tiles
add_filter( 'llms_show_preview_excerpt', '__return_false' );