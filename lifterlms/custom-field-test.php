<?php // Don't copy this line!
/**
 * custom-field-test.php
 *
 * @since 2017-08-21
 */

/**
 * 
 * Create FB name as a custom field upon registration or checkout
 * 
 * @param $fields - fields already being registered
 * @param $screen - either checkout or registration screen
 * @return $fields - array with added field
 */
function add_fb_name_lifterlms ( $fields , $screen ) {
	if( strcmp( $screen , 'checkout' ) == 0 ) {
		$fb_name = array(
			'columns' => 12,
			'id' => 'llms_fb_name',
			'label' => __('Ваш E-mail в Фейсбук (для доступа к группе)', 'lifterlms'),
			'last_column' => false,
			'required' => true,
			'type' => 'text'
		);
		array_push($fields, $fb_name);
	}
	return $fields;
}
add_filter( 'lifterlms_get_person_fields', 'add_fb_name_lifterlms', 10, 2);
/**
 *
 * Validate FB Name
 *
 * FB name should be at least 2 characters long
 *
 * @param $validated - current validation status
 * @param $data -  data being passed for validation
 * @param $screen - $screen should be registration or checkout
 * @return $validated - whether or not the company is valid
 */
function validate_fb_name( $validated , $data, $screen ){
	if( strcmp( $screen , 'checkout' ) == 0 ||
	    strcmp( $screen , 'registration' ) == 0){
		// Make sure fb name is at least characters long
		if( strlen( $data[ 'llms_fb_name' ] ) < 2  ){
			return new WP_Error( 'error-code', 'Неправильно введен E-mail в Фейсбук', 'my-text-domain' );
		}
	}
	return $validated;
}
add_filter( 'lifterlms_user_registration_data' , 'validate_fb_name', 10 , 3 );
add_filter( 'lifterlms_user_update_data' , 'validate_fb_name', 10 , 3 );
/**
 * 
 * Save FB name to usermeta table
 * 
 * @param $person_id - id of user registering or checking out
 * @param $data -  data being passed through to be saved
 * @param $screen -  screen is either registration or checkout
 */
function save_custom_fb_name( $person_id, $data , $screen ){
	update_user_meta( $person_id, 'llms_fb_name', $data['llms_fb_name'], true);
}
add_action( 'lifterlms_user_registered', 'save_custom_fb_name', 10, 3);
add_action( 'lifterlms_user_updated', 'save_custom_fb_name', 10, 3);