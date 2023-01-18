<?php // do not copy this line.
/** 
 * @since 2023-01-18
 */

/**
 * Add United States' Armed States.
 */
add_filter(
	'lifterlms_states',
	function ( $states ) {
		$states['US'] = array_merge(
			$states['US'],
			array(
				'AA' => 'Armed Forces (AA)',
				'AE' => 'Armed Forces (AE)',
				'AP' => 'Armed Forces (AP)',
			)
		);
		return $states;
	}
);
