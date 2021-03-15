<?php // Don't copy this line!
/**
 * Temporary fix for "blank" private areas / posts when using LifterLMS Private Areas with Yoast SEO. Real fix coming in official PA patch
 *
 * @since 2018-08-20
 */
add_filter( 'wpseo_metadesc', 'llms_pa_wpseo_meta_desc' );
function llms_pa_wpseo_meta_desc( $desc ) {

	if ( ! function_exists( 'is_llms_private_area' ) ) {
		return $desc;
	}

	if ( ! $desc && is_llms_private_area() ) {
		$desc = __( 'Your private post.', 'my-text-domain' );
	}

	return $desc;

}