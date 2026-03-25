<?php // Don't copy this line!
/**
 * llms-custom-dashboard-title.php
 *
 * @since 2026-03-25
 */

/**
 * Customize the title for the "My Groups" section on the Student Dashboard
 *
 * @param string $output The default HTML output for the dashboard section title.
 * @param array  $data   {
 *     Contextual data about the current dashboard tab.
 *
 *     @type string $endpoint The slug of the current dashboard endpoint (e.g., 'my-courses', 'my-groups').
 *     @type string $title    The original title of the tab.
 * }
 * @return string The modified HTML title.
 */
function llms_custom_groups_dashboard_title( $output, $data ) {

	// Check if we are on the "My Groups" section
	if ( ! isset( $data['endpoint'] ) || 'my-groups' !== $data['endpoint'] ) {
		return $output;
	}

	// Return the new title with custom text
	return '<h2 class="llms-sd-title">Your Achievement Gallery and Official Course Certificates</h2>';

}
add_filter( 'lifterlms_student_dashboard_title', 'llms_custom_groups_dashboard_title', 10, 2 );
