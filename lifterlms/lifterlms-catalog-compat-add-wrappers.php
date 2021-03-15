<?php // Don't copy this line!
/**
 * lifterlms-catalog-compat-add-wrappers.php
 *
 * @since 2017-05-15
 */

add_action( 'lifterlms_before_main_content', 'my_content_wrapper_open', 10 );
add_action( 'lifterlms_after_main_content', 'my_content_wrapper_close', 10 );

function my_content_wrapper_open() {
	echo '<section class="my-wrapper-class" id="main">';
}

function my_content_wrapper_close() {
	echo '</section>';
}