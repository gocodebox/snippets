<?php // Don't copy this line!
/**
 * llms-prereq-completed.php
 *
 * @since 2016-09-17
 */

foreach ( $lessons as $lesson_child ) :

	$lesson = new LLMS_Lesson( $lesson_child->ID );
	$prereq_id = $lesson->get_prerequisite( $lesson->id );

	// lesson has a prereq
	if( ! empty( $prereq_id ) ) {

		$prereq = new LLMS_Lesson( $prereq_id );

		// prereq is not completed!
		if ( ! $prereq->is_complete() ) {


		}

	}

endforeach;