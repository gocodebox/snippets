<?php
/**
 * Customize the number of comments shown per page with LifterLMS Private Areas.
 *
 * Learn more at: https://lifterlms.com/docs/private-areas-filters/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function my_llms_pa_comments_per_page( $number ) {
	return 100;
}
add_filter( 'llms_pa_comments_per_page', 'my_llms_pa_comments_per_page', 10, 1 );
