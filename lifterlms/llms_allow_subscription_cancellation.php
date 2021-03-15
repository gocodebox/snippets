<?php // Don't copy this line!
/**
 * llms_allow_subscription_cancellation.php
 *
 * @since 2017-07-12
 */

/**
 * Prevents students from being able to self-cancel their recurring subscriptions on the student dashboard
 */
add_filter( 'llms_allow_subscription_cancellation', '__return_false' );