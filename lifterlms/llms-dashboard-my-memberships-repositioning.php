<?php // Don't copy this line!

// Move My Memberships above My Courses in dashboard.
add_action(
	'init',
	function() {
		remove_action( 'lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_memberships', 40 );
		add_action( 'lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_memberships', 5 );
	}
);
