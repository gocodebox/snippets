<?php // Don't copy this line!
/**
 * llms-remove-student-dashboard-tabs.php
 *
 * @since 2016-11-17
 */
/**
 * Remove tabs from the LifterLMS Student dashboard
 * @param    array     $tabs  registered tabs
 * @return   array            
 */
function my_remove_dashboard_tabs( $tabs ) {
	// unset( $tabs['view-courses'] );
	// unset( $tabs['view-achievements'] );
	// unset( $tabs['notifications'] );
	// unset( $tabs['edit-account'] );
	// unset( $tabs['redeem-voucher'] );
	// unset( $tabs['orders'] );
	// unset( $tabs['signout'] );
	return $tabs;
}
add_filter( 'llms_get_student_dashboard_tabs', 'my_remove_dashboard_tabs' );