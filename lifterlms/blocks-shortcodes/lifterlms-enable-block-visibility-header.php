/**
 * Filter to add JavaScript (separate file) for enabling block visibility for the core/header block.
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function my_custom_turn_on_llms_block_visibility_option() {
    wp_enqueue_script(
        'my-custom-script',
        get_template_directory_uri() . '/js/lifterlms-enable-block-visibility-header.js', // Adjust path to your JS file
        array( 'wp-hooks' ), // Ensure wp-hooks is loaded
        null,
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'my_custom_turn_on_llms_block_visibility_option' );
