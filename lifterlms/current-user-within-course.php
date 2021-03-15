<?php // Don't copy this line!
/**
 * current-user-within-course.php
 *
 * @since 2017-10-02
 */

$student = llms_get_student(); // assumes current user
if ( $student->exists() ) { // be safe
  echo $student->get_progress( get_the_ID() ); // pull the progress for the current course
}