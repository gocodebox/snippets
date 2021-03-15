<?php // Don't copy this line!
/**
 * llms-get-section-title.php
 *
 * @since 2016-07-27
 */
$lesson = new LLMS_Lesson( get_the_ID() );
$section = new LLMS_Section( $lesson->get_parent_section() );
echo get_the_title( $section->id );
