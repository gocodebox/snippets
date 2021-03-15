<?php // Don't copy this line!
/**
 * llms-wc-remove-pricing-tables.php
 *
 * @since 2018-02-01
 */
/**
 * Remove LLMS WooCommerce Pricing tables from courses and memberships
 * @return   [type]
 */
function my_mod_llms_wc_actions() {

	remove_action( 'lifterlms_single_course_after_summary', 'llms_wc_output_pricing_table', 60 );
	remove_action( 'lifterlms_single_membership_after_summary', 'llms_wc_output_pricing_table', 10 );

}
add_action( 'init', 'my_mod_llms_wc_actions', 100 );