<?php // Don't copy this line!
/**
 * lifterlms_autoadvance.php
 *
 * @since 2017-07-13
 */

// disable auto-advance on lesson completion
add_filter( 'lifterlms_autoadvance', '__return_false' );