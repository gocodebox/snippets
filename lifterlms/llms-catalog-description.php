<?php // Don't copy this line!
/**
 * llms-catalog-description.php
 *
 * @since 2019-11-14
 */

/**
 * Modify the course catalog description
 */
function my_alter_llms_post_type_course_description( $course_data ) {

    // remvoe the description.
    unset( $course_data[ 'description' ] );
    
    // Or add a custom description.
    $course_data[ 'description' ] = __( 'My course description', 'mytextdomain' );

    return $course_data;
}
add_filter( 'lifterlms_register_post_type_course',  'my_alter_llms_post_type_course_description' );