<?php // Don't copy this line!
/**
 * Modify the link in the empty cart message.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

// Change /courses/ to whatever url you'd like to link to.
add_filter( 'llms_checkout_error_output', function( $message ) {
	if ( false !== strpos( $message, 'Your cart is currently empty' ) ) {
		return sprintf(
			__( 'Your cart is currently empty. Click <a href="%s">here</a> to get started.', 'lifterlms' ),
			esc_url( home_url( '/courses/' ) )
		);
	}

	return $message;
} );
