<?php // Don't copy this line!
/**
 * attempts to resolve various select2 conflicts LifterLMS has with other plugins / themes
 *
 * @since 2016-03-29
 */

/**
 * Dequeue the 3.5.x version of Select2 JS library enqueued by the Rise Theme
 * This is only necessary on LifterLMS Quiz & Course Pages where LifterLMS
 * requires version 4.x or higher to correctly function
 */
function maybe_dequeue_thrive_select2() {

	$screen = get_current_screen();

	if ( 'llms_quiz' === $screen->post_type || 'course' === $screen->post_type ) {

		wp_dequeue_script( 'thrive-select2' );

	}

}
add_action( 'admin_enqueue_scripts', 'maybe_dequeue_thrive_select2', 777 );