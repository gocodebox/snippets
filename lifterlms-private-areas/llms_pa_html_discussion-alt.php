<?php
/**
 * Customize the Privaate Areas commenting to allow HTML quicktags for admins only.
 *
 * Learn more at: https://lifterlms.com/docs/private-areas-filters/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function my_llms_pa_html_discussion( $bool ) {
	if ( ! is_admin() ) {
		return false;
	}
	return $bool;
}
add_filter( 'llms_pa_html_discussion', 'my_llms_pa_html_discussion' );
