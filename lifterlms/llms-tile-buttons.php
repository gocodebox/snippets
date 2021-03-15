<?php // Don't copy this line!
/**
 * llms-tile-buttons.php
 *
 * @since 2017-10-21
 */

/**
 * Add an action that outputs a faux button on LifterLMS student dashboards
 */
function maybe_add_course_loop_button() {

	// if we're not on the dashboard, don't add the button!
	if ( ! is_llms_account_page() ) {
		return;
	}

	// add the action that outputs the button
	add_action( 'lifterlms_after_loop_item_title', 'my_course_loop_button', 75 );

}
add_action( 'wp', 'maybe_add_course_loop_button' );

/**
 * Output a faux button on LifterLMS course tiles
 */
function my_course_loop_button() {
	echo '<span class="llms-button-primary" style="margin:10px 100px;text-align:center;display:block;">Access Content</span>';
}