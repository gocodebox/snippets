<?php // Don't copy this line!
/**
 * More info at: https://lifterlms.com/docs/impreza-theme-course-and-lesson-sidebar-compatibility/
 *
 * @since 2016-06-24
 */
/**
 * Enable Sidebars on Courses and Lessons by updating the Impreza Layout Instance
 * @param  obj $instance   instance of US_Layout
 * @return obj
 */
function llms_impreza_sidebar_position( $instance ) {

	/**
	 * Adjust these variables to define the positions of your course and lesson sidebars
	 * Options are 'left', 'right', and 'none'
	 * 'none' is the default and will result in a full width layout
	 */
	$course_position = 'right';
	$lesson_position = 'right';

	if( 'course' === get_post_type() ) {
		$instance->sidebar_pos = $course_position;
	} elseif ( 'lesson' === get_post_type( ) ) {
		$instance->sidebar_pos = $lesson_position;
	}

}
add_action( 'us_layout_after_init', 'llms_impreza_sidebar_position', 10, 1 );

/**
 * Update LifterLMS sidebar registration defaults to match the defaults of the Impreza theme
 * @param  array $conf  array of default configurations
 * @return array
 */
function llms_impreza_sidebar_conf( $conf ) {

	$conf['before_widget'] = '<div id="%1$s" class="widget %2$s">';
	$conf['after_widget'] = '</div>';
	$conf['before_title'] = '<h4>';
	$conf['after_title'] = '</h4>';

	return $conf;

}
add_filter( 'lifterlms_register_lesson_sidebar', 'llms_impreza_sidebar_conf', 10, 1 );
add_filter( 'lifterlms_register_course_sidebar', 'llms_impreza_sidebar_conf', 10, 1 );

/**
 * When a course or lesson is saved for the first time, set the default selected sidebar
 * to be either Course or Lesson Sidebar depending on whether it's a course or lesson
 * @param  int   $post_id  WP Post ID being saved
 * @return void
 */
function llms_impreza_save_default_sidebar( $post_id ) {

	$type = get_post_type( $post_id );

	// determine what the posted replacement was
	$replacement = ! empty( $_POST[ 'sidebar_generator_replacement' ] ) ? $_POST[ 'sidebar_generator_replacement' ][0] : 'Default Sidebar';

	// determine if we've already set our default (once we set it we don't need to set it again)
	$default_set = get_post_meta( $post_id, 'llms_sbg_default_set', true );

	// if the posted is the default and default hasn't been saved, save it
	if ( 'Default Sidebar' === $replacement && 'yes' !== $default_set ) {

		$_POST['sidebar_generator_replacement'] = array( ucwords( $type ) . ' Sidebar' );
		update_post_meta( $post_id, 'llms_sbg_default_set', 'yes' );

	}

}
add_action( 'save_post_course', 'llms_impreza_save_default_sidebar' );
add_action( 'save_post_lesson', 'llms_impreza_save_default_sidebar' );