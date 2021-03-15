<?php // Don't copy this line!
/**
 * custom-text.php
 *
 * @since 2017-07-24
 */

/**
 * Customize the Members Only button HTML on WooCommerce Members Only products
 * @param    string     $html           default HTML
 * @param    int     $membership_id  WP_Post ID of the membership
 * @return   string
 */
function my_llms_wc_members_only_button_text( $html, $membership_id ) {
	$html = sprintf( __( 'Available to Members of the %s Membership', 'lifterlms' ), get_the_tilte( $membership_id ) );
	$html .= '<br>'
	$html .= '<a class="single_add_to_cart_button button alt" href="' . get_permalink( $membership_id ) . '">' . __( 'Join Now', 'my-text-domain' ) . '</a>';
	return $html;
}
add_filter( 'llms_wc_members_only_button_text', 'my_llms_wc_members_only_button_text', 10, 2 );