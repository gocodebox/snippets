<?php // Don't copy this line!
/**
 * llms-custom-course-slug.php
 *
 * @since 2016-09-15
 */
add_filter( 'lifterlms_register_post_type_course', 'my_custom_course_settings' );
function my_custom_course_settings( $obj ) {

  $obj['rewrite']['slug'] = _x( 'c', 'course link slug', 'my-text-domain' );

  return $obj;

}