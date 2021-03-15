<?php // Don't copy this line!
/**
 * llms_student_dashboard_default_tab.php
 *
 * @since 2017-03-22
 */
/**
 * Customize the default tab displayed when a student visits the student dashboard
 */
function my_custom_student_dashboard_tab( $tab ) {
    return 'view-courses';
}
add_filter( 'llms_student_dashboard_default_tab', 'my_custom_student_dashboard_tab' );