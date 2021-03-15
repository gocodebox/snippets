<?php // Don't copy this line!
/**
 * llms-quiz-theme-support.php
 *
 * @since 2018-02-13
 */

/**
 * Define your theme's custom options so users can select them on the Quiz Builder
 * Yes, this is a metabox-like API
 * Yes, we're recreating the wheel a bit here
 * @param  array  $settings  an array of theme setting defaults
 * @return array
 */
function my_themes_llms_quiz_settings( $settings ) {
	
	// add layout options
	$settings['layout'] = array(
		
		// id is the wp_postmeta key name where your theme's layout setting value should be stored
		'id' => 'my_theme_layout_post_meta_key',
		
		// Allows meta keys that start with an underscore to be tracked by the Course Builder
		// if your layout meta key is "_my_theme_layout_post_meta_key" you should use this field
		// in combination with the "id" above. In the "id" above remove the "_" and add the "_" to the "id_prefix" below
		// 'id_prefix' => '_',
		
		// Human-readable name for the layout field
		'name' => __( 'Layout', 'my-text-domain' ),
		
		// array of $key=>$val pairs where 
		//       $key is the meta value for the option
		//       $val is the name (or image src) displayed on screen
		//       if "type" is "select" $val should be text only name of the layout
		//       if "type" is "image_select" $val should be the src for an image of the layout
		'options' => array(
			'full_width' => get_template_directory_uri() . '/images/full_width.png',
			'sidebar_left' => get_template_directory_uri() . '/images/sidebar_left.png',
			'sidebar_right' => get_template_directory_uri() . '/images/sidebar_right.png',
		),
		
		// define the option interface type
		//        "image_select" shows images as radio elements (useful if you have grahpical layout options)
		//        "select" is a text-based select element
		'type' => 'image_select',
		
	);
	
	return $settings;
	
}
add_filter( 'llms_get_quiz_theme_settings', 'my_themes_llms_quiz_settings' );

// declare that your theme supports LifterLMS Quizzes
add_theme_support( 'lifterlms-quizzes' );