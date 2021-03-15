<?php // Don't copy this line!
/**
 * hide-on-shop.php
 *
 * @since 2017-07-24
 */

/**
 * Remove the Members Only button completely from shop/archive pages
 * @param    string     $html           default HTML
 * @param    int     $membership_id  WP_Post ID of the membership
 * @return   string
 */
function my_llms_wc_members_only_button_text( $html, $membership_id ) {
	if ( function_exists( 'is_shop' ) && is_shop() ) {
		return '';
	}
	return $html;
}
add_filter( 'llms_wc_members_only_button_text', 'my_llms_wc_members_only_button_text', 10, 2 );