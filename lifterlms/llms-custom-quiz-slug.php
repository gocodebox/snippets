<?php // Don't copy this line!
/**
 * llms-custom-quiz-slug.php
 *
 * @since 2018-02-12
 */
add_filter( 'lifterlms_register_post_type_quiz', 'my_custom_quiz_settings' );
function my_custom_quiz_settings( $obj ) {
  $obj['rewrite']['slug'] = _x( 'llms_quiz', 'quiz link slug', 'my-text-domain' );
  return $obj;
}