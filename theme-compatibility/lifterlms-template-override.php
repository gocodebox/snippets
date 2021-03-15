<?php // Don't copy this line!
/**
 * lifterlms-template-override.php
 *
 * @since 2016-06-01
 */
/**
 * Add an arbitrary plugin directory to the list
 * @param  array $dirs    Array of paths to directories to load LifterLMS templates from
 * @return array
 */
function my_llms_theme_override_dirs( $dirs ) {
	
	array_unshift( $dirs, plugin_dir_path( __FILE__ ) . '/lifterlms' );

	return $dirs;
	
}
add_filter( 'lifterlms_theme_override_directories', 'my_llms_theme_override_dirs', 10, 1 );