<?php // Don't copy this line!
/**
 * Remove Genesis Alternate Sidebar from LifterLMS Course Page
 *
 * @since 2016-04-04
 */

/**
 * Deregister Genesis sidebar(s) on LifterLMS Course page
 */
function maybe_deregister_sidebars() {

  if ( 'course' === get_post_type() ) {

    remove_action( 'genesis_sidebar_alt', 'genesis_do_sidebar_alt' );

  }

}
add_action( 'wp', 'maybe_deregister_sidebars', 777 );