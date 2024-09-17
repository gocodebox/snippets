<?php
/**
 * Hiding paid access plans for students enrolled in particular memberships.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function llms_product_is_purchasable( $purchasable, $product ) {

	$user_id           = get_current_user_id();
	$free_access_plans = $product->get_access_plans( true );

	// Get membership restrictions.
	$membership_restrictions = array();
	foreach ( $free_access_plans as $plan ) {
		$membership_restrictions[] = $plan->get( 'availability_restrictions' );
	}

	// Merging the array.
	$membership_restrictions = array_merge( ...$membership_restrictions );

	// Check if a user is enrolled in the memberships.
	foreach ( $membership_restrictions as $membership_id ) {
		if ( llms_is_user_enrolled( $user_id, $membership_id ) ) {
			$purchasable = false;
		}
	}

	return $purchasable;
}

add_filter( 'llms_product_is_purchasable', 'llms_product_is_purchasable', 10, 2 );
