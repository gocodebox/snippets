<?php // Don't copy this line!
/**
 * run LLMS pre get posts filter late (Divi overrides this with theme options)
 *
 * @since 2017-11-11
 */

// remove the default pre get posts action (no use in running it twice)
function my_remove_actions() {
	remove_action( 'pre_get_posts', array( LLMS()->query, 'pre_get_posts' ) );
}
add_action( 'init', 'my_remove_actions' );

// add it back to run later
add_action( 'pre_get_posts', array( LLMS()->query, 'pre_get_posts' ), 999 );