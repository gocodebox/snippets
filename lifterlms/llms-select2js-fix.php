<?php // Don't copy this line!
/**
 * llms-select2js-fix.php
 *
 * @since 2016-12-16
 */
/**
 * Switch LLMS membership access metabox to be a multi-select rather than an AJAX select2 field
 * @param    array     $tabs  array of metabox tabs
 * @return   array
 */
function my_llms_fix_select2( $tabs ) {

	global $post;

	$q = new WP_Query( array(
		'post_status' => 'publish',
		'post_type' => 'llms_membership',
		'posts_per_page' => -1,
	) );

	$value = array();

	foreach( $q->posts as $p ) {

		$value[] = array(
			'key' => $p->ID,
			'title' => $p->post_title,
		);

	}

	foreach( $tabs[0]['fields'] as &$f ) {

		if ( isset( $f['id'] ) && '_llms_restricted_levels' !== $f['id'] ) { continue; }

		$f['selected'] = get_post_meta( $post->ID, '_llms_restricted_levels', true );
		$f['class'] = str_replace( 'llms-select2-post', '', $f['class'] );
		$f['value'] = $value;

		break;

	}

	return $tabs;
}
add_filter( 'llms_metabox_fields_lifterlms_membership_access', 'my_llms_fix_select2' );
