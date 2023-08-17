<?php // <- Don't copy this line.

/**
 * Make address and phone fields not required on free plan checkout.
 *
 * @since 08/17/2023
 *
 * @param array $settings The field settings.
 *
 * @return array
 */
add_filter( 'llms_field_settings', function ( array $settings ): array {
	$id = $settings['id'] ?? '';

	if ( str_contains( $id, 'billing' ) || str_contains( $id, 'phone' ) ) {

		$plan    = (int) llms_filter_input( INPUT_GET, 'plan', FILTER_SANITIZE_FULL_SPECIAL_CHARS );
		$is_free = ( llms_get_post( $plan )->get( 'is_free' ) ?? null ) === 'yes';

		if ( $is_free ) {
			$settings['required'] = false;
		}
	}

	return $settings;
}, 10 );

