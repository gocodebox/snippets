<?php // Don't copy this line!

/**
 * @since 2021-10-20
 */
add_filter(
	'llms_forms_required_block_fields',
	function( $required, $location ) {
		// Allow registration forms without password fields.
		if ( 'registration' === $location ) {
			unset( $required['password'] );
		}
		return $required;
	},
	10,
	2
);
