<?php // Don't copy this line!
/**
 * customize course / lesson language
 *
 * @since 2017-09-27
 */

function my_llms_course_reg( $args ) {
    $args['labels']['name'] = __( 'Modules', 'my-text-domain' );
    $args['labels']['singular_name'] = __( 'Module', 'my-text-domain' );
    $args['rewrite']['slug'] = _x( 'module', 'slug', 'my-text-domain' );
    return $args;
}
add_filter( 'lifterlms_register_post_type_course', 'my_llms_course_reg' );