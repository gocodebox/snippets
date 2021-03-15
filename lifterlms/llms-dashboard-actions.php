<?php // Don't copy this line!
/**
 * llms-dashboard-actions.php
 *
 * @since 2017-11-08
 */

remove_action( 'lifterlms_before_student_dashboard_content', 'lifterlms_template_student_dashboard_header', 10 );
remove_action( 'lifterlms_student_dashboard_header', 'lifterlms_template_student_dashboard_navigation', 10 );
remove_action( 'lifterlms_student_dashboard_header', 'lifterlms_template_student_dashboard_title', 20 );
remove_action( 'lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_courses', 10 );
remove_action( 'lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_achievements', 20 );
remove_action( 'lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_certificates', 30 );
