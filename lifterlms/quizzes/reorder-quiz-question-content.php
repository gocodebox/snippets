<?php
/**
 * Move the single quiz's question description below the video.
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
function llms_reorder_quiz_actions() {
	// First, remove the existing action with its original priority.
	remove_action( 'lifterlms_single_question_content', 'lifterlms_template_question_description', 10 );

	// Then, re-add the action with the new priority.
	add_action( 'lifterlms_single_question_content', 'lifterlms_template_question_description', 35 );
}
add_action( 'plugins_loaded', 'llms_reorder_quiz_actions', 999 );
