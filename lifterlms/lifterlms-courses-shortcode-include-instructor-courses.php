<?php // <- do not copy this line.
/**
 * Display only enrolled courses in dashboard's My Courses.
 *
 * https://lifterlms.com/docs/how-do-i-add-custom-code-to-lifterlms/
 */
add_filter( 'llms_courses_shortcode_get_post__in', function( $ids ) {
	if ( ! is_user_logged_in()  ) {
		return $ids;
	}

	$instructor = llms_get_instructor();

	if ( ! $instructor ) {
		return $ids;
	}

	return array_merge( $ids, $instructor->get_courses( array(), 'ids' ) );
} );
