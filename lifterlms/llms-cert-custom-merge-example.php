<?php // Don't copy this line!
/**
 * llms-cert-custom-merge-example.php
 *
 * @since 2025-11-24 Updated with more reliable filters.
 */

/**
 * Filter the array of available merge codes.
 * 
 * @param   array $merge_codes     Array of available merge codes, and their description.
 *
 * @return  array
 */
function my_custom_available_certificate_merge_codes( $merge_codes ) {
	$merge_codes['{your_merge_code}'] = 'Your Merge Code Description';

	return $merge_codes;
}
add_filter( 'llms_certificate_available_merge_codes', 'my_custom_available_certificate_merge_codes' );

/**
 * Add custom merge code data to an LLMS certificate.
 *
 * @param    array $codes            Array of key (merge code with brackets) and value (data to replace it with)
 * @param    int   $user_id          WP_User ID
 * @param    int   $template_id      WP_Post ID of the certificate template
 * @param    int   $related_post_id  WP_Post ID of the post which triggered the certificate generation
 *
 * @return   array
 */
function my_custom_certificate_merge_code_data( $codes, $user_id, $template_id, $related_id ) {
	$codes['{your_merge_code}'] = get_user_meta( $user_id, 'your_user_meta_key', true );

	return $codes;
}
add_filter( 'llms_certificate_merge_data', 'my_custom_certificate_merge_code_data', 10, 4 );
