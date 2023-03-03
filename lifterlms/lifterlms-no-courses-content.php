<?php // <- do not copy this line.

/**
 * lifterlms-no-courses-content.php
 *
 * @since 2023-03-03
 */
add_filter(
	'gettext_lifterlms',
	function( $translation ) {
		if ( $translation === 'You are not enrolled in any courses.' ) {
			$translation = '<p>My Custom Content</p>';
		}

		return $translation;
	}
);
