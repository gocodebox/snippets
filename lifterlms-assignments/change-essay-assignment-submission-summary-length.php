<?php
/**
 * Change the length of the {{SUBMISSION_SUMMARY}} notification merge code for an assignment of type "Essay."
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

add_filter( 'llms_assignments_submission_summary_essay_limit', function( $value ) { 
  // To remove the limit completely, this could be changed to:
  // return INF; 
  return 1000; 
} );
