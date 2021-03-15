<?php // Don't copy this line!
/**
 * lifterlms-catalog-compat-remove-defaults.php
 *
 * @since 2017-05-15
 */
remove_action( 'lifterlms_before_main_content', 'lifterlms_output_content_wrapper', 10 );
remove_action( 'lifterlms_after_main_content', 'lifterlms_output_content_wrapper_end', 10 );