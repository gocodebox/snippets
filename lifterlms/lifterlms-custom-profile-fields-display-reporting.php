<?php // Don't copy this line!
/**
 * Custom Fields added to LifterLMS Registration/Checkout
 *
 * @since 2017-06-07
 */

add_action( 'llms_reporting_student_tab_info_stab_after_content', 'my_output_custom_field_data' );

function my_output_custom_field_data() {
	$student = isset( $_GET['student_id'] ) ? $_GET['student_id'] : null;
	if ( ! $student ) {
		return;
	}
	?>
	<div class="d-1of4">
		<ul>
			<li><strong><?php _e( 'Industry', 'lifterlms' ); ?></strong></li>
			<li><?php echo get_user_meta( $student, 'llms_company_industry', true ); ?></li>
		</ul>
	</div>
	<?php
}