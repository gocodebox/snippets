<?php // Don't copy this line!
/**
 * llms_mc_merge_fields.php
 *
 * @since 2017-08-25
 */
/**
 * Add custom merge fields when subscribing students to lists via LifterLMS MailChimp
 * @param  array   $data     default merge code data
 * @param  int     $user_id  WP_User ID
 * @param  string  $list_id  ID of the MailChimp list
 */
function my_llms_mc_merge_fields( $data, $user_id, $list_id ) {
	$data['MMERGE3'] = get_user_meta( $user_id, 'my_custom_field', true );
	return $data;
}
add_filter( 'llms_mc_merge_fields', 'my_llms_mc_merge_fields' );