<?php // Don't copy this line!
/**
 * catalog compat for Customizr theme https://wordpress.org/themes/customizr/
 *
 * @since 2016-12-30
 */


add_action( 'lifterlms_before_main_content', 'my_llms_content_wrapper_open' );
function my_llms_content_wrapper_open() {
?>
<?php do_action( '__before_main_wrapper' ); ##hook of the header with get_header ?>
<div id="main-wrapper" class="<?php echo implode(' ', apply_filters( 'tc_main_wrapper_classes' , array('container') ) ) ?>">

    <?php do_action( '__before_main_container' ); ##hook of the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>

    <div class="container" role="main">
        <div class="<?php echo implode(' ', apply_filters( 'tc_column_content_wrapper_classes' , array('row' ,'column-content-wrapper') ) ) ?>">
<?php
}

add_action( 'lifterlms_after_main_content', 'my_llms_content_wrapper_close' );
function my_llms_content_wrapper_close() {
?>
</div><!-- .container role: main -->

    <?php do_action( '__after_main_container' ); ?>

</div><!-- //#main-wrapper -->

<?php do_action( '__after_main_wrapper' );##hook of the footer with get_footer ?>
</div>
<?php
remove_action( 'lifterlms_sidebar', 'lifterlms_get_sidebar' );
}
