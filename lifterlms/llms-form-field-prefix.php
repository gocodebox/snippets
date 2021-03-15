<?php // Don't copy this line!
/**
 * llms-form-field-prefix.php
 *
 * @since 2017-05-27
 */

add_filter( 'llms_form_field', 'my_llms_form_field', 10, 2 );
function my_llms_form_field( $html, $field ) {

	if ( 'first_name' === $field['id'] ) {
		$field['id'] = 'lifterlms_' . $field['id'];
		remove_filter( 'llms_form_field', 'my_llms_form_field', 10, 2 );
		$html = llms_form_field( $field );
		add_filter( 'llms_form_field', 'my_llms_form_field', 10, 2 );
	}

	return $html;

}