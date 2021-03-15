<?php // Don't copy this line!
/**
 * llms-avada-sidebar-compat.php
 *
 * @since 2016-05-23
 */

/**
 * Ensure LifterLMS Sidebars are registered with the same settings as Avada Sidebars
 * This ensures visual consistency between regular sidebars and LifterLMS Sidebars
 * 
 * @param  array $args array of sidebar registration arguments
 * @return array
 */
function llms_avada_sidebar_compat( $args ) {

	$args = array_merge( $args, array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="heading"><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
	) );

	return $args;
}
add_filter( 'lifterlms_register_lesson_sidebar', 'llms_avada_sidebar_compat' );
add_filter( 'lifterlms_register_course_sidebar', 'llms_avada_sidebar_compat' );

/**
 * Declare explicit theme support for LifterLMS course and lesson sidebars
 * @return   void
 */
function my_llms_theme_support(){
    add_theme_support( 'lifterlms-sidebars' );
}
add_action( 'after_setup_theme', 'my_llms_theme_support' );