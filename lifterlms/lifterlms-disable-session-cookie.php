<?php // Don't copy this line!
/**
 * Disable creation of the wp_llms_session cookie.
 *
 * Read more about cookies, caching, and what will be disabled here:
 * https://lifterlms.com/docs/lifterlms-cookies-faq/
 */
add_filter( 'llms_session_should_init', '__return_false' );
