<?php // Don't copy this line!
/**
 * llms-cert-course-title-code.php
 *
 * @since 2017-10-23
 */
/**
 * Add custom merge codes to an LLMS certificate
 * @param    int   $user_id          WP_User ID
 * @param    int   $cert_id          WP_Post ID of the generated certificate
 * @param    int   $related_post_id  WP_Post ID of the post which triggered the certificate generation
 * @return   void
 */
function my_custom_cert_merge_codes( $user_id, $cert_id, $related_post_id ) {
		
	$cert_post = get_post( $cert_id );
	$content = str_replace( '{course_title}', get_the_title( $related_post_id ), $cert_post->post_content );
	wp_update_post( array(
		'ID' => $cert_id,
		'post_content' => $content
	) );
}
add_action( 'llms_user_earned_certificate', 'my_custom_cert_merge_codes', 999, 3 );