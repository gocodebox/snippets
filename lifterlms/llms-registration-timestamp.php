<?php // Don't copy this line!
/**
 * llms-registration-timestamp.php
 *
 * @since 2016-05-18
 */
add_action( 'lifterlms_user_registered', function( $user_id ) {
	update_user_meta( $user_id, 'llms_last_login', current_time( 'timestamp' ) );
} );