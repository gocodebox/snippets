<?php // Don't copy this line!
/**
 * llms_stripe_get_card_desrcription.php
 *
 * @since 2017-07-12
 */

/**
 * Customize the Card description displayed on the admin panel and student dashboards
 * @param    string     $description  default card description
 * @param    obj        $card         Stripe Card object (https://stripe.com/docs/api#card_object)
 * @return   string
 */
function my_llms_stripe_get_card_desrcription( $description, $card ) {
	// EG: Visa (Exp. 12/2019)
	return sprintf( __( '%1$s (Exp. %2$d/%3$d)', 'my-text-domain' ), $card->brand, $card->exp_month, $card->exp_year );

}
add_filter( 'llms_stripe_get_card_desrcription', 'my_llms_stripe_get_card_desrcription', 10, 2 );