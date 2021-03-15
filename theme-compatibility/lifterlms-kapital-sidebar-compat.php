<?php // Don't copy this line!
/**
 * LifterLMS Course & Lesson Sidebar Compatibility for the Kapital Theme (http://themeforest.net/item/kapital-responsive-multipurpose-theme/10064359?ref=gocodeBOX)
 *
 * @since 2016-04-25
 */
/**
 * Display lesson and course custom sidebars on the appropriate LifterLMS pages when using the Kapital WordPress Theme
 *
 * @param  array $sidebars_widgets  array of registered sidebars
 * @return array
 */
function lifterlms_sidebar_compatibility( $sidebars_widgets ) {

    // replace the widgets in the primary sidebar with LifterLMS Course sidebar on Course Pages
    if ( is_singular( 'course' ) && array_key_exists( 'llms_course_widgets_side', $sidebars_widgets ) ) {
        $sidebars_widgets['main-widget-area'] = $sidebars_widgets['llms_course_widgets_side'];
        $sidebars_widgets['blog-widget-area'] = $sidebars_widgets['llms_course_widgets_side'];
    }
    // replace the widgets in the primary sidebar with LifterLMS Lesson sidebar on Lesson Pages
    elseif ( is_singular( 'lesson' ) && array_key_exists( 'llms_lesson_widgets_side', $sidebars_widgets ) ) {
          $sidebars_widgets['main-widget-area'] = $sidebars_widgets['llms_lesson_widgets_side'];
          $sidebars_widgets['blog-widget-area'] = $sidebars_widgets['llms_lesson_widgets_side'];
    }
    return $sidebars_widgets;
}
add_filter( 'sidebars_widgets', 'lifterlms_sidebar_compatibility' );