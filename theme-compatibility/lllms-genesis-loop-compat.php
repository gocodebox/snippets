<?php
/**
 * Custom Loop Template for use with Genesis and Genesis Children.
 * 
 * https://lifterlms.com/docs/make-lifterlms-loops-friendly-genesis-child-themes/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Remove default genesis loop, we're going to replace it with LifterLMS
 */
remove_action( 'genesis_loop', 'genesis_do_loop' );

/**
 * Get the genesis layout for the LifterLMS Catalog we're on
 * @param    string   $layout  default layout setting
 * @return   string
 */
function llms_genesis_loop_layout( $layout ) {

	global $wp;

	if ( isset( $wp->query_vars ) && isset( $wp->query_vars['post_type'] ) ) {

		switch ( $wp->query_vars['post_type'] ) {

			case 'llms_membership':
				$id = llms_get_page_id( 'memberships' );
			break;

			case 'course';
				$id = llms_get_page_id( 'courses' );
			break;
		}

		if ( $id ) {

			$layout = get_post_meta( $id, '_genesis_layout', true );

		}

	}

	return $layout;
}
add_filter( 'genesis_pre_get_option_site_layout', 'llms_genesis_loop_layout' );


/**
 * Outplt LifterLMS content wrappers
 * @return   void
 */
function llms_genesis_before_loop() {

	do_action( 'lifterlms_before_main_content' );

	if ( apply_filters( 'lifterlms_show_page_title', true ) ) :

		echo '<h1 class="page-title">';
			lifterlms_page_title();
		echo '</h1>';

	endif;

	do_action( 'lifterlms_archive_description' );

}
add_action( 'genesis_before_loop', 'llms_genesis_before_loop' );


/**
 * Do the custom LifterLMS Loop
 * @return   void
 */
function llms_genesis_loop() {

	if ( have_posts() ) {

		/**
		 * lifterlms_before_loop hook
		 * @hooked lifterlms_loop_start - 10
		 */
		do_action( 'lifterlms_before_loop' );

		while ( have_posts() ) : the_post();

			llms_get_template_part( 'loop/content', get_post_type() );

		endwhile;


		/**
		 * lifterlms_before_loop hook
		 * @hooked lifterlms_loop_end - 10
		 */
		do_action( 'lifterlms_after_loop' );

		llms_get_template_part( 'loop/pagination' );

	} else {

		llms_get_template( 'loop/none-found.php' );

	}

}
add_action( 'genesis_loop', 'llms_genesis_loop' );

/**
 * Close LifterLMS content Wrappers
 * @return   void
 */
function llms_genesis_after_loop() {
	do_action( 'lifterlms_after_main_content' );
}
add_action( 'genesis_after_loop', 'llms_genesis_after_loop' );

genesis();
