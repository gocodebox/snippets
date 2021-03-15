<?php // Don't copy this line!
/**
 * Sliding Door WP Theme LLMS Sidebar Support
 *
 * @since 2016-10-28
 */
/**
 * Display LifterLMS Course and Lesson sidebars
 * on courses and lessons in place of the sidebar returned by
 * this function
 * @param    string     $id    default sidebar id (an empty string)
 * @return   string
 */
function my_llms_sidebar_function( $id ) {

	// $my_sidebar_id = 'primary-widget-area'; // left side
	$my_sidebar_id = 'secondary-widget-area'; // right side

return $my_sidebar_id;
}
add_filter( 'llms_get_theme_default_sidebar', 'my_llms_sidebar_function' );

/**
 * Declare explicit theme support for LifterLMS course and lesson sidebars
 * @return   void
 */
function my_llms_theme_support(){
	add_theme_support( 'lifterlms-sidebars' );
}
add_action( 'after_setup_theme', 'my_llms_theme_support' );