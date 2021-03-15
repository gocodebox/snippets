<?php // Don't copy this line!
/**
 * llms-sl-autopost-stories.php
 *
 * @since 2018-02-12
 */
/**
 * Remove LifterLMS Social Learning auto-post actions
 * Uncomment (remove "//") from the beginning of each line for actions you'd like removed
 * For example: if you don't want Quiz Passed stories posted, uncomment line #24
 * @return   void
 */
function my_llms_sl_autopost_stories() {
	
	// Course Completed Story
	// remove_action( 'lifterlms_course_completed', array( 'LLMS_SL_Stories', 'complete' ), 25, 2 );

	// Achievement Earned Story
	// remove_action( 'llms_user_earned_achievement', array( 'LLMS_SL_Stories', 'achievement' ), 25, 3 );

	// Course and Membership Enrollment Stories
	// remove_action( 'llms_user_enrolled_in_course', array( 'LLMS_SL_Stories', 'enrollment' ), 25, 2 );
	// remove_action( 'llms_user_added_to_membership_level', array( 'LLMS_SL_Stories', 'enrollment' ), 25, 2 );

	// Site Registration story
	// remove_action( 'lifterlms_user_registered', array( 'LLMS_SL_Stories', 'join' ), 25, 1 );

	// Quiz Passed story
	// remove_action( 'lifterlms_quiz_passed', array( 'LLMS_SL_Stories', 'pass' ), 25, 3 );

}
add_action( 'init', 'my_llms_sl_autopost_stories' );