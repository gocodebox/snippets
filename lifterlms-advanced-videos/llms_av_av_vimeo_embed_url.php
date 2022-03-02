<?php // <- do not copy this line.

/**
 * Disable keyboard input in the Vimeo player.
 *
 * @see LLMS_AV_Abstract_Integration::modify_embed_url()
 *
 * @since 2022-03-02
 *
 * @param string                       $url          The URL to the video with additional player settings.
 * @param string                       $original_url The URL to the video without additional player settings.
 * @param LLMS_AV_Abstract_Integration $av_object    An object extended from the LLMS_AV_Abstract_Integration class,
 *                                                   such as LLMS_AV_Integration_Vimeo.
 * @return string
 */
function my_llms_vimeo_disable_keyboard( $url, $original_url, $av_object ) {

	if ( get_class( $av_object ) !== 'LLMS_AV_Integration_Vimeo' ) {
		return $url;
	}

	return $url . '&keyboard=false';
}

add_filter( 'llms_av_av_vimeo_embed_url', 'my_llms_vimeo_disable_keyboard', 10, 3 );
