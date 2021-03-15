<?php // Don't copy this line!
/**
 * lifterlms-custom-reg-fields-handler.php
 *
 * @since 2016-07-05
 */
// add an action to the hook
add_action( 'lifterlms_user_registered', 'save_my_custom_lifterlms_registration_fields', 10, 1 );
// create the function that add_action will call
// $user_id is going to be the WP User ID of the newly created user

function save_my_custom_lifterlms_registration_fields( $user_id ) {

	// look at $_POST to find the fields you've created in the previous function

	// check to see if the field was submitted before proceeding
	if( isset( $_POST['my_field_name'] ) ) {

		// do some data validation / cleaning here maybe?

		// save the data to the user meta table, but you could do whatever you want at this point
		update_user_meta( $user_id, 'my_custom_field', esc_html( $_POST['my_field_name'] ) );

	}

	// if you have other fields you created you can check those here too

}
?>