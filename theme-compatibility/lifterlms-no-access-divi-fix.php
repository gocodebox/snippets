<?php // Don't copy this line!
/**
 * "Fix" LifterLMS No Access Template when Divi is the theme
 *
 * @since 2016-04-09
 */
/**
 * Add Divi Related HTML to LifterLMS templates that need some extra elements
 *
 * Tested up to Divi v3.0.9
 */

/**
 * Remove default LifterLMS Content Wrappers
 */
remove_action( 'lifterlms_before_main_content', 'lifterlms_output_content_wrapper', 10 );
remove_action( 'lifterlms_after_main_content', 'lifterlms_output_content_wrapper_end', 10 );

/**
 * Before Content
 * @return void
 */
function my_llms_before_content() {

	echo '
		<div id="main-content">
			<div class="container">
				<div id="content-area" class="clearfix">
					<div id="left-area">
	';

}
add_action( 'lifterlms_before_main_content', 'my_llms_before_content' );


/**
 * After content
 * @return void
 */
function my_llms_after_content() {

	echo '
				</div> <!-- #left-area -->
	';

				get_sidebar();
	echo '
			</div> <!-- #content-area -->
		</div> <!-- .container -->
	</div> <!-- #main-content -->
	';

}
add_action( 'lifterlms_after_main_content', 'my_llms_after_content' );