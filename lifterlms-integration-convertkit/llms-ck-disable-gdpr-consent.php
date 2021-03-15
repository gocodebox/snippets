<?php // Don't copy this line!
/**
 * Disables GDPR explicit consent features in LifterLMS ConvertKit. Do so at your own risk. Consult with legal counsel before adding this to your site. I am not legal counsel. LifterLMS support is also not legal counsel. Thanks for unerstanding!
 *
 * @since 2018-07-20
 */
/**
 * Get the HTML for the Terms field displayed on reg forms
 * @return   void
 */
function llms_ck_consent_form_field() {

	if ( llms_parse_bool( get_user_meta( get_current_user_id(), 'llms_ck_consent', true ) ) ) {
		return;
	}

	llms_form_field( array(
		'id' => 'llms_ck_consent',
		'type'  => 'hidden',
		'value' => 'yes',
	) );

}

// remove the action that allows users to unsubscribe from their account dashboard
add_action( 'lifterlms_before_person_edit_account_form', function() {
	remove_action( 'lifterlms_after_update_fields', 'llms_ck_dashboard_consent_form_field', 15 );
}, 25 );
