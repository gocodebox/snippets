<?php // Don't copy this line!
/**
 * llms_get_product_access_plan_limit.php
 *
 * @since 2017-09-06
 */

/**
 * Change the maximum number of access plans which can be created for a single course / membership
 * @param  int  $limit  number of plans
 * @return int
 */
function my_llms_get_product_access_plan_limit( $limit ) {
  return 12;
}
add_filter( 'llms_get_product_access_plan_limit', 'my_llms_get_product_access_plan_limit' );