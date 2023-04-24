<?php // <- do not copy this line.
/**
 * Display only enrolled courses in dashboard's My Courses.
 *
 * @since 04-24-2023
 */
add_filter(
	'llms_my_courses_loop_courses_query_args',
	function ( $args ) {
		return array_merge(
			$args,
			[
				'status' => 'enrolled',
			]
		);
	}
);
