<?php // Don't copy this line!
/**
 * Disable user consent/opt-in to MailChimp lists during LifterLMS user registration 
 *
 * @since 2020-10-14
 */

add_filter( 'llms_mc_enable_consent', '__return_false' );