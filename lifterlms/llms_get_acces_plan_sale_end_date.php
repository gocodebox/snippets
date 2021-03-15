<?php // Don't copy this line!
/**
 * llms_get_acces_plan_sale_end_date.php
 *
 * @since 2018-11-07
 */
function my_sale_end_date_format( $date ) {
	return date_i18n( 'd.m.y', strtotime( $date ) );
}
add_filter( 'llms_get_access_plan_sale_end_date', 'my_sale_end_date_format' );