<?php // Don't copy this line!
/**
 * Add a {course_title} merge code to LifterLMS certificates.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

add_filter( 'llms_certificate_merge_codes', 'llms_custom_course_title_merge_code', 10, 2 );

function llms_custom_course_title_merge_code( $merge_codes_array, $certificate_object ){

	// the triger post's (course's) id is in the lesson_id property of the $certificate_object
	$course_title = get_the_title( $certificate_object->lesson_id );

	// add custom certificate title merge code to existing ones
	$merge_codes_array['{course_title}'] = $course_title;
	
	// return new merge code list
	return $merge_codes_array;
}

add_filter( 'llms_merge_codes_for_button', 'llms_custom_course_title_merge_code_for_button', 10, 2 );

function llms_custom_course_title_merge_code_for_button( $codes, $screen ){
	// don't run on emails
	if( $screen->post_type != 'llms_certificate' ){
		return;
	}
	
	$codes['{course_title}'] = "Course Title";
	
	return $codes;
}
