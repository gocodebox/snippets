<?php // Don't copy this line!
/**
 * llms-catalog-descriptions.php
 *
 * @since 2017-05-30
 */

// this will add custom content BEFORE the dynamic catalog content
add_action( 'lifterlms_archive_description', 'my_llms_catalog_description' );

// this will add custom contet AFTER the dynamic catalog content
add_action( 'lifterlms_after_main_content', 'my_llms_catalog_description' );

function my_llms_catalog_description() {
	// for course catalog
	if ( is_post_type_archive( 'course' ) ) {
		// replace the content here with your custom html / content
		echo '<p>This displays on the course catalog! Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>';
	}
	// for membership catalog
	if ( is_post_type_archive( 'llms_membership' ) ) {
		// replace the content here with your custom html / content
		echo '<p>This displays on the membership catalog! Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>';
	}
}