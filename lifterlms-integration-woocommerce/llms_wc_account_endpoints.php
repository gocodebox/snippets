<?php // Don't copy this line!
/**
 * llms_wc_account_endpoints.php
 *
 * @since 2018-01-26
 */

/**
 * Customize the text or slugs of LifterLMS account endpoints added to the WooCommerce account page
 * @param    array     $endpoints  default endpoint data
 * @return   array
 */
function my_llms_wc_account_endpoints( $endpoints ) {

	$endpoints = array(
		'courses' => __( 'Courses', 'lifterlms-woocommerce' ),
		'memberships' => __( 'Memberships', 'lifterlms-woocommerce' ),
		'achievements' => __( 'Achievements', 'lifterlms-woocommerce' ),
		'certificates' => __( 'Certificates', 'lifterlms-woocommerce' ),
		'notifications' => __( 'Notifications', 'lifterlms-woocommerce' ),
		'vouchers' => __( 'Vouchers', 'lifterlms-woocommerce' ),
	);

	return $endpoints;

}
add_filter( 'llms_wc_account_endpoints', 'my_llms_wc_account_endpoints' );
