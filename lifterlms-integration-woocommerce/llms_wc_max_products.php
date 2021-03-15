<?php // Don't copy this line!
/**
 * llms_wc_max_products.php
 *
 * @since 2017-07-24
 */
/**
 * Change the default number of products which can be associated with a course / membership
 * @param  int $num number of products (6)
 * @return int
 */
function my_llms_wc_max_products( $num ) {
  return 100; // because I'm crazy...
}
add_filter( 'llms_wc_max_products', 'my_llms_wc_max_products', 10, 1 );