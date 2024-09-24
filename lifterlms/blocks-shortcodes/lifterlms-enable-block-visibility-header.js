/**
 * Enable block visibility for the core/heading block.
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
wp.hooks.addFilter(
  'llms_block_supports_visibility',
  'your-namespace/modify-visibility', // Unique namespace for your function
  function( ret, settings, name ) {
    // Check if the block name is 'core/heading'
    if ( name === 'core/heading' ) {
      // Return true to modify the visibility support
      return true;
    }
    // Otherwise, return the original value
    return ret;
  }
);
