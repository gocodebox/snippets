<?php // Don't copy this line!
/**
 * llms_wc_product_shortcode.php
 *
 * @since 2017-08-30
 */
add_filter( 'llms_wc_product_shortcode', 'my_llms_wc_product_shortcode', 10, 3 );
function my_llms_wc_product_shortcode( $shortcode, $post, $product_ids ) {

	$shortcode = '';
	foreach ( $product_ids as $product_id ) {

		$shortcode .= sprintf( '[product_page id="%d"]', $product_id );

	}

	return $shortcode;

}