<?php // Don't copy this line!
/**
 * Adjust the language of the LifterLMS Stripe Credit Card Form.
 *
 * @since 2020-04-07
 */

/**
 * Adjust the locale of the Stripe.js credit card form.
 *
 * @param array $settings Array of settings.
 * @return array
 */
function my_llms_stripe_js_locale( $settings ) {

	// Adjust the locale of Stripe.js, see https://stripe.com/docs/js/elements_object/create#stripe_elements-options-locale for supported locales.
	$settings['elements']['locale'] = 'auto'; 
	return $settings;

}
add_filter( 'llms_stripe_elements_settings', 'my_llms_stripe_js_locale' );