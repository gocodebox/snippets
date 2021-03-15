<?php // Don't copy this line!
/**
 * more info at https://lifterlms.com/docs/lifterlms-sidebar-support/
 *
 * @since 2016-09-27
 */
/**
 * Declare explicit theme support for LifterLMS course and lesson sidebars
 * @return   void
 */
function my_llms_theme_support(){
	add_theme_support( 'lifterlms-sidebars' );
}
add_action( 'after_setup_theme', 'my_llms_theme_support' );