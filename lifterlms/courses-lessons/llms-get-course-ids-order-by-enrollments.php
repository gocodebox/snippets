<?php
/**
 * Get all the course IDs ordered by enrolled students in descending order.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function llms_get_courses_ids_order_by_enrollments() {
	// Get all the course IDs.
	$course_ids = get_posts(
		array(
			'post_type'      => 'course',
			'posts_per_page' => -1,
			'fields'         => 'ids',
		)
	);

	// Get the enrolled students count for each course.
	$enrollment_counts = array();
	foreach ( $course_ids as $course_id ) {
		$course                          = new LLMS_Course( $course_id );
		$enrollment_counts[ $course_id ] = $course->get_student_count();
	}

	// Sort the array in descending order.
	arsort( $enrollment_counts );

	return $enrollment_counts;
}
$desc_sorted_course_ids = llms_get_courses_ids_order_by_enrollments();
