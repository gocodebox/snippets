<?php
/**
 * LifterLMS Chromatic Catalog Theme Compatibility.
 * 
 * https://lifterlms.com/docs/fix-catalogs-chromatic-theme/
 * 
 * You can add this recipe to your site by creating a custom plugin
 * or using the Code Snippets plugin available for free in the WordPress repository.
 * Read this companion documentation for step-by-step directions on either method.
 * https://lifterlms.com/docs/adding-custom-code/
 */

 /**
 * The Template for displaying LifterLMS Course and Membership Catalogs
 * llms_loop page which is a post type archive.
 */
add_filter( 'hoot_main_layout', function( $layout ) {
	return 'none';
} );
?>

<?php get_header( 'llms_loop' ); ?>

<?php
// Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)
get_template_part( 'template-parts/loop-meta', 'llms_loop' );

// Template modification Hook
do_action( 'hoot_template_before_content_grid', 'archive-product.php' );
?>

<div class="grid main-content-grid">

	<?php
	// Template modification Hook
	do_action( 'hoot_template_before_main', 'archive-product.php' );
	?>

	<main <?php hoot_attr( 'content' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_start', 'archive-product.php' ); ?>


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


		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_end', 'archive-product.php' );
		?>

	</main><!-- #content -->

	<?php
	// Template modification Hook
	do_action( 'hoot_template_after_main', 'archive-product.php' );
	?>


</div><!-- .grid -->

<?php get_footer( 'llms_loop' ); ?>