<?php // Don't copy this line!
/**
 * lifterlms-custom-registration-validation.php
 *
 * @since 2016-03-07
 */

/**
 * Add custom validation to the LifterLMS Registration Form
 * @param  obj    $errors  instance of WP_Error
 * @return obj
 */
function my_lifterlms_registration_validation( $errors ) {

	// if the phone number field is not submitted or is empty
	if( ! isset( $_POST['phone'] ) || empty( $_POST['phone'] ) ) {

		// need to be sure $errors object is a WP_Error instance
		if ( ! is_wp_error( $errors ) ) {

			$errors = new WP_Error();

		}

		// add your error
		// parameters are:
		// 	  error code (not really needed or used but required)
		//    error message
		//    data to pass (again not really needed but could be useful for logging)
		$errors->add( 'phone-required', __( 'You must enter a phone number', 'mytextdomain' ), array() );

	}

	return $errors;

}
add_filter( 'lifterlms_user_registration_errors', 'my_lifterlms_registration_validation', 10, 1 );