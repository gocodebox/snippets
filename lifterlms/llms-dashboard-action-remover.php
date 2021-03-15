<?php // Don't copy this line!
/**
 * llms-dashboard-action-remover.php
 *
 * @since 2017-10-12
 */


/**
 * This function will run before we start outputting any info on the dashboard (only on the dashboard)
 * so instead of removing an action globally we'll remove it only on the dashboard
 */
function my_dashboard_action_remover() {

	​remove_action( 'lifterlms_after_loop_item_title', 'lifterlms_template_loop_author', 10 );

}
​add_action( 'lifterlms_before_student_dashboard', 'my_dashboard_action_remover' );

​