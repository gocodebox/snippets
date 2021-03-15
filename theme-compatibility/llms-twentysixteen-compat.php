<?php // Don't copy this line!
/**
 * llms-twentysixteen-compat.php
 *
 * @since 2016-09-12
 */
/**
 * Custom twenty sixteen excerpt to pevent "restricted content" from being displayed
 * on courses
 * @see https://github.com/gocodebox/lifterlms/issues/184
 * @param    string   $class    classes to add
 * @return   void
 */
function twentysixteen_excerpt( $class = 'entry-summary' ) {
		
	if ( function_exists( 'is_course' ) && is_course() ) {
		return;
	}
	
	$class = esc_attr( $class );

	if ( has_excerpt() || is_search() ) : ?>
		<div class="<?php echo $class; ?>">
			<?php the_excerpt(); ?>
		</div><!-- .<?php echo $class; ?> -->
	<?php endif;
}