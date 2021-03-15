<?php // Don't copy this line!
/**
 * llms_load_processor_path.php
 *
 * @since 2018-02-12
 */
/**
 * Disable the LifterLMS Course Data background processor
 * @param    string     $id  ID of the processor being loaded
 * @return   string
 */
function llms_disable_course_data_processor( $id ) {

	if ( 'course_data' === $id ) {
		$id = false;
	}

	return $id;

}
add_filter( 'llms_load_processor_path', 'llms_disable_course_data_processor' );