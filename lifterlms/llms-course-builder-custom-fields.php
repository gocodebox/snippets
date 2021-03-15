<?php // Don't copy this line!
/**
 * llms-course-builder-custom-fields.php
 *
 * @since 2018-03-27
 */


function my_llms_builder_custom_fields( $fields ) {

	$fields['lesson']['my_custom_group'] = array(
		// Optional field group title
		'title' => __( 'My Custom Field Group', 'my-text-domain' ),
		// if the group can be toggled open/closed
		'toggleable' => true,
		// array of rows and fields
		// rows are *required*
		'fields' => array(
			// this row has only one field
			array(
				array(
					/**
					 * @property  string  $attribute  (required) the name of the postmeta key
					 */
					'attribute' => 'my_simple_switch',
					/**
					 * @property  string  $attribute_prefix  (optional) if postmeta key starts with an underscore
					 *                                       put that here otherwise exclude this property
					 *                                       the builder does not store or save attributes that start with an underscore
					 *                                       so this allows that data to be saved properly
					 */
					'attribute_prefix' => '_',
					/**
					 * @property  string  $id  (optional) ID of the generated HTML element
					 */
					'id' => 'my-simple-switch',
					/**
					 * @property  string  $label  (required) the field's label
					 */
					'label' => __( 'Simple Switch Field', 'my-text-domain' ),
					/**
					 * @property  string  $tip  (optional) add a tooltip with helper text on hover
					 */
					'tip' => __( 'This is a tooltip displayed when hovering over the field.', 'my-text-domain' ),
					/**
					 * @property  string  $type   the field type
					 *                            Available types:
					 *                            	+ switch: a switch (checkbox) with a "yes" value when on and "no" value when off
					 *                            	+ text: a regular text input
					 *                            	+ number: a regular number input
					 *                            	+ select: a drophown select
					 *                            	+ switch-text: a combination switch / text input
					 *                            	+ switch-number: a combination switch / number input
					 *                            	+ switch-select: a combination switch / select input
					 */
					'type' => 'switch',
				),
			),
			// this row has two fields
			array(
				array(
					'attribute' => 'my_custom_text_switch',
					'attribute_prefix' => '_',
					'label' => __( 'Switch with Text Combo Field', 'my-text-domain' ),
					'switch_attribute' => 'my_custom_text_switch_switch',
					'tip' => __( 'This is a tooltip displayed when hovering over the field.', 'my-text-domain' ),
					'type' => 'switch-text',
				),
				array(
					'attribute' => 'my_custom_field',
					'attribute_prefix' => '_',
					'label' => __( 'My Custom Field Name', 'my-text-domain' ),
					'type' => 'text',
				),
			),
			// this row has two fields also
			array(
				array(
					'attribute' => 'my_select_field',
					'label' => __( 'My Select Field', 'my-text-domain' ),
					'type' => 'select',
					/**
					 * @property  $options  array  (required) When creating a select or switch-select this defines the
					 *                             available options
					 */
					'options' => array(
						'' => __( 'Default Option', 'my-text-domain' ),
						'val_1' => __( 'Option 1', 'my-text-domain' ),
						'val_2' => __( 'Option 2', 'my-text-domain' ),
						'val_3' => __( 'Option 2', 'my-text-domain' ),
					),
				),
				array(
					'attribute' => 'my_select_field',
					'label' => __( 'My Select Field', 'my-text-domain' ),
					'type' => 'select',
					// this $options example adds <optgroups> to the generated select element
					'options' => array(
						array(
							'label' => __( 'Option Group Label', 'my-text-domain' ),
							'options' => array(
								'' => __( 'Default', 'my-text-domain' ),
								'val_1' => __( 'Option', 'my-text-domain' ),
								'val_2' => __( 'Another option', 'my-text-domain' ),
								'val_3' => __( 'More options', 'my-text-domain' ),
							),
						),
						array(
							'label' => __( '2nd Option Group Label', 'my-text-domain' ),
							'options' => array(
								'val_4' => __( 'Default', 'my-text-domain' ),
								'val_5' => __( 'Option', 'my-text-domain' ),
								'val_6' => __( 'Another option', 'my-text-domain' ),
								'val_7' => __( 'More options', 'my-text-domain' ),
							),
						),
					),
				),
			),
		),
	);

	return $fields;
}
add_filter( 'llms_builder_register_custom_fields', 'my_llms_builder_custom_fields' );