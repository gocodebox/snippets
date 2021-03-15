<?php // Don't copy this line!
/**
 * LifterLMS Private Areas filter examples: https://lifterlms.com/docs/private-areas-filters/
 *
 * @since 2017-08-11
 */
/**
 * customize PA commenting to Allow HTML quicktags for admins only
 * @param    boolean   $bool  default HTML status (true)
 * @return   boolean
 */
function my_llms_pa_html_discussion( $bool ) {
	if ( ! is_admin() ) {
		return false;
	}
	return $bool;
}
add_filter( 'llms_pa_html_discussion', 'my_llms_pa_html_discussion' );