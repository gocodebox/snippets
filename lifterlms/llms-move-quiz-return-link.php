<?php // Don't copy this line!
/**
 * llms-move-quiz-return-link.php
 *
 * @since 2016-05-25
 */
remove_action( 'lifterlms_single_quiz_before_summary', 'lifterlms_template_quiz_return_link', 10 ); // remove the default action
add_action( 'lifterlms_single_quiz_after_summary', 'lifterlms_template_quiz_return_link', 10 ); // adjust the 10 here to put it before or after other elements if you're not happy with the positioning