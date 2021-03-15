<?php // Don't copy this line!
/**
 * llms-custom-checkout-validation.php
 *
 * @since 2017-04-21
 */
add_action( 'wp_enqueue_scripts', 'my_llms_tracking_script', 777777 );
function my_llms_tracking_script() {
	ob_start();
	?>
	;( function( $, undefined ) {
		/**
		 * Callback function run before submitting the checkout form for PHP processing
		 * Allows custom addition of stuff prior to checkout
		 * @param    {[type]}    data      optional data passed in when adding the handler
		 * @param    {Function}  callback  callback function
		                                   return true in the callback when successful (form will proceed to the next handler or submit)
		                                   return a string which will be displayed as an error message when failure (halts submission)
		 * @return   void
		 */
		window.my_custom_checkout_handler = function( data, callback ) {

			// data is available when added via add_before_submit_event()
			console.log( data );

			// do stuff here

			// on failure return the callback w/ an error message
			return callback( 'This error message will be displayed' );

			// on success return the callback w/ true
			return callback( true );
		};

		// optional object of data passed to the handler
		var my_custom_data = {};

		// add the event
		window.llms.checkout.add_before_submit_event( { data: my_custom_data, handler: window.my_custom_checkout_handler } );

	} )( jQuery );
	<?php
	$script = ob_get_clean();
	wp_add_inline_script( 'llms-form-checkout', $script );
}