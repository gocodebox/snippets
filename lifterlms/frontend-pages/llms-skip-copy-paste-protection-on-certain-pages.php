<?php
/**
 * Example for avoiding copy/pasting on certain page IDs.
 * 
 * See https://lifterlms.com/docs/how-do-i-add-custom-code-to-lifterlms/ for how to use snippets like this.
 */
function my_disable_copy_protection( $allow_copying ) {
    if ( ! $allow_copying && in_array( get_the_ID(), array( 123, 456 ) ) {
        $allow_copying = true;
    }

    return $allow_copying;
}
add_filter( 'llms_skip_content_prevention', 'my_disable_copy_protection' );
