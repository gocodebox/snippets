<?php // Don't copy this line!
/**
 * lifterlms_get_user_custom_fields.php
 *
 * @since 2016-05-05
 */

/**
 * Add a custom field to the user's profile on the WP admin panel
 * @param  array $fields associatve array of field data
 * @return array
 */
function my_custom_user_fields( $fields ) {

	$fields['llms_custom_field_id'] = array( // array key *should* the value you want to store in the WP usermeta table

		'description' => 'A short description of this field',
		'label' => __( 'My Custom Field Label', 'my-text-domain' ),
		'required' => false, // if you want this field to be required, switch to "true"
		'type'  => 'text', // accepts any valid HTML5 input type, note that we don't have support for textareas or select elements!

	);

	return $fields;

}
add_filter( 'lifterlms_get_user_custom_fields', 'my_custom_user_fields', 10, 1 );