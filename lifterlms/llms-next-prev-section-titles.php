<?php // Don't copy this line!
/**
 * llms-next-prev-section-titles.php
 *
 * @since 2016-07-27
 */
$lesson = new LLMS_Lesson( get_the_ID() );

// previous
$prev_id = $lesson->get_previous_lesson();
if ( $prev_id ) {
	$prev_section = new LLMS_Section( $prev_id );
	echo get_the_title( $prev_section->id );
}


$next_id = $lesson->get_next_lesson();
if ( $next_id ) {
	$next_section = new LLMS_Section( $next_id );
	echo get_the_title( $next_section->id );
}
