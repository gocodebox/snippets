<?php // Don't copy this line!
/**
 * lifterlms_single_course_after_summary.php
 *
 * @since 2017-06-26
 */

/**
 * Output some custom HTML after the course syllabus
 */
function my_after_course_summary_content() {
	?>
	<h2><?php _e( 'Want to learn more about this course?', 'my-text-domain' ); ?></h2>
	<a class="my-awesome-button" href="#"><?php _e( 'Click Here', 'my-text-domain' ); ?></a>
	<?php
}

add_action( 'lifterlms_single_course_after_summary', 'my_after_course_summary_content', 95 ); // 95 will display after the syllabus and before reviews