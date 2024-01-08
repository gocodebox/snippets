<?php // Don't copy this line!
/**
 * Change the single lesson's default permalink from 'lesson' to something else.
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
add_filter( 'lifterlms_register_post_type_lesson', 'my_custom_lesson_settings' );
function my_custom_lesson_settings( $obj ) {

  $obj['rewrite']['slug'] = _x( 'Your Lesson Name', 'lesson link slug', 'my-text-domain' );

  return $obj;

}
