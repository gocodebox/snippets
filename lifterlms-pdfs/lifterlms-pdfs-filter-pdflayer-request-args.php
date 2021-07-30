<?php // Don't copy this line!
/**
 * 1) Remove margins
 * 2) Parse @media print
 * 3) Set zoom to 2
 * 4) Change the orientation to 'portrait'.
 *
 * see https://pdflayer.com/documentation
 * @since 2019-07-30
 */
add_filter(
	'llms_pdfs_pdflayer_request_args',
	function( $args ) {

		$settings = array(
			'margin_top'      => 0,
			'margin_bottom'   => 0,
			'margin_left'     => 0,
			'margin_right'    => 0,
			'use_print_media' => 1,
			'zoom'            => 2,
			'orientation'     => 'portrait',
		);

		$args['body'] = array_merge(
			$args['body'],
			$settings
		);
		
		return $args;
	}
);
