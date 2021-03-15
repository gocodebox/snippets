<?php // Don't copy this line!
/**
 * available for LifterLMS 3.8.0-alpha.1 & higher
 *
 * @since 2017-04-27
 */
add_filter( 'llms_email_css', 'my_llms_email_branding' );
function my_llms_email_branding( $css ) {

	// these are all the defineable rules with their defaults
	// uncomment and customize whichever you wish to customize
	// not a dev? confused? I'll be adding branding options to LifterLMS Labs in conjunction with the public release of LifterLMS 3.8

// 	$css['background-color'] = '#f6f6f6';
// 	$css['border-radius'] = '3px';
// 	$css['button-background-color'] = '#2295ff';
// 	$css['button-font-color'] = '#ffffff';
// 	$css['divider-color'] = '#cecece';
// 	$css['font-color'] = '#222222';
// 	$css['font-family'] = 'sans-serif';
// 	$css['font-size'] = '15px';
// 	$css['font-size-small'] = '13px';
// 	$css['heading-background-color'] = '#2295ff';
// 	$css['heading-font-color'] = '#ffffff';
// 	$css['main-color'] = '#2295ff';
// 	$css['max-width'] = '580px';
	
	return $css;
}