<?php // Don't copy this line!
/**
 * llms-remove-wc-menu-items.php
 *
 * @since 2016-12-10
 */
/**
 * Remove LifterLMS menu Items from the WooCommerce My Account Menu
 * @param    array     $items  associative array of menu items as slug=>title
 * @return   array
 */
function my_wc_menu_items( $items ) {
			
	unset( $items['courses'];
	unset( $items['memberships'];
	unset( $items['achievements'];
	unset( $items['certificates'];

	return $items;
	
}
add_filter( 'woocommerce_account_menu_items', 'my_wc_menu_items', 99, 1 );