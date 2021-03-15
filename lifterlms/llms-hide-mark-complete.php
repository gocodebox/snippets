<?php // Don't copy this line!
/**
 * llms-hide-mark-complete.php
 *
 * @since 2016-04-05
 */

add_action( 'wp_print_footer_scripts', 'i_know_this_is_bad' );
function i_know_this_is_bad() {

	// lets only load this on lessons where it would be used
	if ( 'lesson' === get_post_type() ) {

		echo "
			<script>
				jQuery( document ).ready( function() {

					var $btn = jQuery( 'input[name=\"mark_complete\"]' );

					$btn.hide();

					setTimeout( function() { 

						$btn.show();

					}, 10000 );

				} );
			</script>
		";

	}

}