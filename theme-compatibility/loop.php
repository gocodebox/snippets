<?php // Don't copy this line!
/**
 * custom LifterLMS catalog loop for the Story theme
 *
 * @since 2016-12-13
 */
/**
 * Custom LifterLMS Loop
 * for use with the Story theme
 */
global $wp;
switch ( $wp->query_vars['post_type'] ) {

	case 'llms_membership':
		$post_id = llms_get_page_id( 'memberships' );
	break;

	case 'course';
		$post_id = llms_get_page_id( 'courses' );
	break;
}
get_header();
global $pexeto_page;
//get all the page meta data (settings) needed (function located in unctions/meta.php)
$pexeto_page=pexeto_get_post_meta( $post_id, array( 'slider', 'layout', 'header_display', 'sidebar' ) );
$pexeto_page['title'] = get_the_title( $post_id );
//include the before content template
locate_template( array( 'includes/html-before-content.php' ), true, true );

?>
<div class="content-box">

<?php do_action( 'lifterlms_archive_description' ); ?>

<?php if ( have_posts() ) : ?>

	<?php
		/**
		 * lifterlms_before_loop hook
		 * @hooked lifterlms_loop_start - 10
		 */
		do_action( 'lifterlms_before_loop' );
	?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php llms_get_template_part( 'loop/content', get_post_type() ); ?>

	<?php endwhile; ?>

	<?php
		/**
		 * lifterlms_before_loop hook
		 * @hooked lifterlms_loop_end - 10
		 */
		do_action( 'lifterlms_after_loop' );
	?>

	<?php llms_get_template_part( 'loop/pagination' ); ?>

<?php else : ?>

	<?php llms_get_template( 'loop/none-found.php' ); ?>

<?php endif; ?>

<?php do_action( 'lifterlms_after_main_content' ); ?>

<div class="clear"></div>
</div>
<?php

//include the after content template
locate_template( array( 'includes/html-after-content.php' ), true, true );

get_footer();