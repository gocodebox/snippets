<?php // Don't copy this line!
/**
 * llms-checkout-link.php
 *
 * @since 2016-08-25
 */
/**
 * Retrieve the checkout URL for a LifterLMS product
 * @param    int     $product_id  WP_Post ID of a course or membership
 * @return   string
 */
function llms_get_checkout_url( $product_id = null ) {
  
	if ( ! $product_id ) {
		
		$product_id = get_the_ID();
			
	}

	if ( ! get_current_user_id() ) {

		return add_query_arg( 'product-id', $poduct_id, get_permalink( llms_get_page_id( 'myaccount' ) ) );

	} else {

		return add_query_arg( 'product-id', $poduct_id, get_permalink( llms_get_page_id( 'checkout' ) ) );

	}

}