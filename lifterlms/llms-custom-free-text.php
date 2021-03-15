<?php // Don't copy this line!
/**
 * llms-custom-free-text.php
 *
 * @since 2017-01-09
 */

function my_custom_plan_free_text( $text, $plan ) {

	// we do not want to mess with a number, it will break payment gateway functions!
	if ( is_numeric( $text ) ) {
		return $text;
	}

	// if this is a members only access plan and the current user / visitor is NOT enrolled in the membership
	// this is important because you (probably) still want to display free to your logged in members who are already part of the membership
	if ( $plan->has_availability_restrictions() ) {

		// loop through the memberships
		foreach( $plan->get_array( 'availability_restrictions' ) as $mid ) {

			// if we find that the user is enrolled in the membership we should (probably) return the original free text
			// because the course IS free for them
			if ( llms_is_user_enrolled( get_current_user_id(), $mid ) ) {
				return $text;
			}
		}

		// if we make it here, that means the user is not a a member and we should show them the alternate free text
		$my_custom_text = __( 'NOT FREE!', 'my-text-domain' ); // change your text on this line, __() used for i18n best practices but not necessary
		$text = '<span class="lifterlms-price">' . $my_custom_text . '</span>'; // follow default LLMS html

	}

	// return the custom or default if not customized
	return $text;

}
add_filter( 'llms_get_free_access_plan_pricing_text', 'my_custom_plan_free_text', 11, 2 );