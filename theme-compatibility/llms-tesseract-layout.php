<?php // Don't copy this line!
/**
 * Add layout options for LifterLMS courses, lessons, and quizzes for the Tesseract theme
 *
 * @since 2016-07-20
 */
/**
 * Add layout options for LifterLMS courses, lessons, and quizzes for the Tesseract theme
 * @param    string     $layout  default layout according to customizer options
 * @return   string
 */
function llms_tesseract_layout( $layout ) {

	$post_type = get_post_type();

	if ( is_singular() ) {

		if ( 'course' === $post_type || 'lesson' === $post_type ) {

			// $layout = 'sidebar-left'; // for left-side sidebars
			$layout = 'sidebar-right'; // for right-side sidebars

		} elseif ( 'llms_quiz' === $post_type ) {

			$layout = 'fullwidth';

		}

	}

	return $layout;

}
add_filter( 'theme_mod_tesseract_blog_post_layout', 'llms_tesseract_layout', 10, 1 );

/**
 * Declare explicit theme support for LifterLMS course and lesson sidebars
 * @return   void
 */
function my_llms_theme_support(){
    add_theme_support( 'lifterlms-sidebars' );
}
add_action( 'after_setup_theme', 'my_llms_theme_support' );