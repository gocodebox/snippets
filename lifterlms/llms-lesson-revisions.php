<?php // Don't copy this line!
/**
 * enable revisions on LifterLMS lessons
 *
 * @since 2017-09-28
 */

function my_llms_lesson_reg_stuff( $args ) {
    $args['supports'][] = 'revisions';
    return $args;
}
add_filter( 'lifterlms_register_post_type_lesson', 'my_llms_lesson_reg_stuff' );