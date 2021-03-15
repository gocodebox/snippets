<?php // Don't copy this line!
/**
 * llms-checkout-url.php
 *
 * @since 2016-07-26
 */
$product_id = 123; // this is WordPress post ID of the course or membership you're selling
$checkout_url = add_query_arg( 'product-id', $product_id, get_permalink( llms_get_page_id( 'checkout' ) ) );