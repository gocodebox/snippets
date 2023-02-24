<?php // don't copy this line.
// Set city field's label as "Città";
$city_field_label = "Città";
add_filter(
	'llms_countries_address_info',
	function( $countries_info ) use ( $city_field_label ) {
		foreach ( $countries_info as $country => &$info ) {
			if ( $city_field_label !== $info['city'] ) {
				$info['city'] = $city_field_label;
			}
		}
		return $countries_info;
	}
);
