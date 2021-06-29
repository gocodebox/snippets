<?php // Don't copy this line!

/**
 * Modify LifterLMS l10n data for country's states.
 *
 * @since 2021-06-29
 *
 * @see https://github.com/gocodebox/lifterlms/blob/trunk/languages/states.php
 * 
 * @param array $states Array of states keyed by country.
 * @return array
 */
function my_custom_states_list( $states ) {
	$states['DE'] = array(); // Remove the German state's list.
	return $states;
}
add_filter( 'lifterlms_states', 'my_custom_states_list' );
