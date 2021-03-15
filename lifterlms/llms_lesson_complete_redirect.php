<?php // Don't copy this line!
/**
 * llms_lesson_complete_redirect.php
 *
 * @since 2017-04-04
 */
/**
 * Redirect to a custom URL upon marking a lesson complete
 * @param    string     $url  default URL
 * @return   string
 */
function my_llms_lesson_complete_redirect( $url ) {
	return 'http://mycustomurl.com';
}
add_filter( 'llms_lesson_complete_redirect', 'my_llms_lesson_complete_redirect', 10, 1 );