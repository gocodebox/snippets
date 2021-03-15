<?php // Don't copy this line!
/**
 * redirect student to a custom page after cancelling a subscription from their account dashboard
 *
 * @since 2018-02-02
 */
/**
 * Add an action that adds an action to redirect
 * We do this because the status is updated and other things need to happen before the redirct...
 * @return   [type]
 */
function my_order_cancelled_action() {
	add_action( 'wp_loaded', 'my_order_cancelled_redirect' );
}
add_action( 'lifterlms_order_status_cancelled', 'my_order_cancelled_action' );

/**
 * Actually rediret
 * @return   [type]
 */
function my_order_cancelled_redirect() {
	wp_redirect( 'http://mydomain.com/my-rederict-path' );
}