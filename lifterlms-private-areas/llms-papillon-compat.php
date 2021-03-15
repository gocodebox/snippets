<?php // Don't copy this line!
/**
 * llms-papillon-compat.php
 *
 * @since 2016-10-14
 */
/**
 * Papillon Theme v2.5.2 compat with LLMS 3.0
 */

// disable llms loop titles so we can output it accordng to theme styles later
add_filter( 'lifterlms_show_page_title', '__return_false' );

// remove default llms wrappers
remove_action( 'lifterlms_before_main_content', 'lifterlms_output_content_wrapper', 10 );
remove_action( 'lifterlms_after_main_content', 'lifterlms_output_content_wrapper_end', 10 );

// disable sidebar on archives
remove_action( 'lifterlms_sidebar', 'lifterlms_get_sidebar', 10 );

// add our custom actions
add_action( 'lifterlms_before_main_content', 'my_lifterlms_output_content_wrapper', 10 );
add_action( 'lifterlms_after_main_content', 'my_lifterlms_output_content_wrapper_end', 10 );

/**
 * Content wrapper displayed before lifterlms loops
 */
function my_lifterlms_output_content_wrapper() {
?>
    <div class="container">
	<section id="headline">
      <h3><?php lifterlms_page_title(); ?></h3>
	</section>
    </div>
<section id="main-content" class="container"><div class="row">
	<hr class="vertical-space2">
	<!-- Start Page Content -->
	<div class="row-wrapper-x">
<?php
}

/**
 * Content wrapper displayed after lifterlms loops
 */
function my_lifterlms_output_content_wrapper_end() {
?>
	</div>
	<!-- end-sidebar-->
	<div class="vertical-space">
</div></section>
<?php
}

/**
 * Display LifterLMS Course and Lesson sidebars
 * on courses and lessons in place of the sidebar returned by
 * this function
 * @param    string     $id    default sidebar id (an empty string)
 * @return   string
 */
function my_llms_sidebar_function( $id ) {
	// $my_sidebar_id = 'left-sidebar'; // for left side
	$my_sidebar_id = 'right-sidebar'; // for right side
	return $my_sidebar_id;
}
add_filter( 'llms_get_theme_default_sidebar', 'my_llms_sidebar_function' );