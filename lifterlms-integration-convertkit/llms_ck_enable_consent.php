<?php // Don't copy this line!
/**
 * Disable "consent" in LifterLMS ConvertKit
 *
 * @since 2019-03-18
 */

// Disable "consent" requirements in LifterLMS ConvertKit
add_filter( 'llms_ck_enable_consent', '__return_false' );