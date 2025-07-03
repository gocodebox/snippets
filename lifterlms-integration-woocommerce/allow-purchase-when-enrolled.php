<?php // Don't copy this line!
/**
 * Still allow purchase when enrolled in a product
 * 
 * Information on using custom code: https://lifterlms.com/docs/how-do-i-add-custom-code-to-lifterlms/
 */

/**
  OPTION 1
*/
// Allow purchase of all WooCommerce products regardless of enrollments.
add_filter( 'llms_wc_user_not_already_enrolled_into_related_llms_products', '__return_true' );


/**
  OPTION 2
*/
// If you want to be more specific, you can do checks based on the current user or the WC product.
add_filter( 'llms_wc_user_not_already_enrolled_into_related_llms_products', function ( $return, $user_id, $wc_product ) {
  $llms_products = llms_get_llms_products_by_wc_product_id( $wc_product->get_id() );

  // Do checks based on user ID, the WC product, and/or the LifterLMS products associated with the WC product.
  // Return true if allowed, a WP_Error otherwise.

  return $return;
}, 10, 3 );
