<?php // <- do not copy this line.

/**
 * Custom access plan button shortcode
 *
 * Basically identical to the core's 'lifterlms_access_plan_button' shortcode:
 * https://lifterlms.com/docs/shortcodes/#lifterlms_access_plan_button
 *
 * The only difference is that, when used in a Course/Membership, it links to the
 * first visbile Access Plan, so the `id` is not a required param anymore.
 */
add_shortcode(
	'lifterlms_access_plan_button_custom',
	function ( $atts, $content = '' ) {

		if ( empty( $atts['id'] ) ) {

			$course_membership = llms_get_post( get_the_ID() ); // Must be in the loop.
			if ( ! method_exists( $course_membership, 'get_product' ) ) {
				return '';
			}

			$access_plans = $course_membership->get_product()->get_access_plans(); // Retrieve the first visible access plan.
			if ( ! isset( $access_plans[0] ) ) {
				return '';
			}

			$atts       = is_array( $atts ) ? $atts : array();
			$atts['id'] = $access_plans[0]->get( 'id' );
		}

		return LLMS_Shortcodes::access_plan_button( $atts, $content );

	}
);
