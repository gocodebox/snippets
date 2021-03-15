<?php // Don't copy this line!
/**
 * llms-manual-achievement.php
 *
 * @since 2017-08-28
 */
add_action( 'init', 'my_manual_achievement' );
function my_manual_achievement() {

  	$user_id = 123; // WP User ID of the user you want to award an achievement to
		$achievement_id = 456; // WP Post ID of the LifterLMS Achievement Post you want to award to the user
		$post_id = 5202; // The Releated WP Post ID that triggered the awarding of this achievement. This could be a Course, Lesson, Section, or Quiz ID

		$achievements = LLMS()->achievements();
		$achievements->trigger_engagement( $user_id, $achievement_id, $post_id );
  
}
