<?php // Don't copy this line!
/**
 * lifterlms-checkbox-registration.php
 *
 * @since 2018-01-16
 */
/**
 * Add a set of checkboxes to LifterLMS Checkout and Registration
 * @param $fields - fields already being registered
 * @param $screen - either checkout or registration screen
 * @return $fields - array with added fields
 */
function add_preferred_language_field( $fields , $screen ) {
	if ( 'checkout' === $screen || 'registration' === $screen ) {

		$options = array(
			'english' => __( 'English', 'my-text-domain' ),
			'spanish' => __( 'Spanish', 'my-text-domain' ),
			'german' => __( 'German', 'my-text-domain' ),
		);

		$fields[] = array(
			'columns' => 12,
			'id' => 'my-lang-label',
			'last_column' => false,
			'required' => false,
			'type' => 'html',
			'value' => '<label>' . __( 'Preferred Languages', 'my-text-domain' ) . '<label>',
		);

		foreach ( $options as $key => $val ) {

			$fields[] = array(
				'columns' => 12,
				'id' => sprintf( 'my_lang_field_%s', $key ),
				'name' => 'my_preferred_lang[]',
				'label' => $val,
				'last_column' => false,
				'required' => false,
				'type' => 'checkbox',
				'value' => $key,
			);

		}
	}

	return $fields;

}
add_filter( 'lifterlms_get_person_fields', 'add_preferred_language_field', 10, 2 );