<?php // Don't copy this line!
/**
 * LifterLMS Course and Lesson Sidebar compatibility for the Pet Rescue theme (http://themeforest.net/item/pet-rescue-animals-shelter-charity-wp-theme/9347370?ref=gocodeBOX)
 *
 * @since 2016-04-22
 */
/**
 * Display lesson and course custom sidebars on the appropriate LifterLMS pages
 *
 * @param  array $sidebars_widgets  array of registered sidebars
 * @return array
 */
function lifterlms_sidebar_compatibility( $sidebars_widgets ) {

	// replace the widgets in the primary sidebar with LifterLMS Course sidebar on Course Pages
	if ( is_singular( 'course' ) && array_key_exists( 'llms_course_widgets_side', $sidebars_widgets ) ) {
		$sidebars_widgets['sidebar_default'] = $sidebars_widgets['llms_course_widgets_side'];
	}
	// replace the widgets in the primary sidebar with LifterLMS Lesson sidebar on Lesson Pages
	elseif ( is_singular( 'lesson' ) && array_key_exists( 'llms_lesson_widgets_side', $sidebars_widgets ) ) {
		  $sidebars_widgets['sidebar_default'] = $sidebars_widgets['llms_lesson_widgets_side'];
	}
	return $sidebars_widgets;
}
add_filter( 'sidebars_widgets', 'lifterlms_sidebar_compatibility' );