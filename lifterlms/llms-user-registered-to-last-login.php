<?php // Don't copy this line!
/**
 * llms-user-registered-to-last-login.php
 *
 * @since 2016-05-18
 */
add_action( 'admin_init', function() {

	$users = new WP_User_Query( array(

		'meta_query' => array(
			array(
				'key' => 'llms_last_login',
				'compare' => 'NOT EXISTS',
			)
		)

	) );

	foreach( $users->results as $user ) {

		update_user_meta( $user->ID, 'llms_last_login', strtotime( $user->data->user_registered, current_time( 'timestamp' ) ) );

	}

} );