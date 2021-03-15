<?php // Don't copy this line!
/**
 * llms-enlighten-theme-catalogs.php
 *
 * @since 2016-11-04
 */

add_action( 'lifterlms_before_main_content', 'my_llms_content_wrapper_open' );
function my_llms_content_wrapper_open() {
?>
<div class="ak-container">
	<div id="primary" class="content-area right">
		<main id="main" class="site-main" role="main">
<?php
}

add_action( 'lifterlms_after_main_content', 'my_llms_content_wrapper_close' );
function my_llms_content_wrapper_close() {
?>
		</main><!-- #main -->
	</div><!-- #primary -->

    <div id="secondary" class="right_right">
        <?php
            get_sidebar();
        ?>
    </div>
</div>
<?php
}