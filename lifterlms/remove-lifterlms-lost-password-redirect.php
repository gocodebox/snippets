<?php // Don't copy this line!
/**
 * Remove the LifterLMS filter on the WordPress lost password URL.
 *
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

remove_filter( 'lostpassword_url', 'llms_lostpassword_url', 10, 1 );
