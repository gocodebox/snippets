<?php
/**
 * Disable HTML quick tags for discussion (comments) on PA Posts
 *
 * Learn more at: https://lifterlms.com/docs/private-areas-filters/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
add_filter( 'llms_pa_html_discussion', '__return_false' );
