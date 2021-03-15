<?php // Don't copy this line!
/**
 * unenroll-from-voucher.php
 *
 * @since 2017-09-01
 */
/**
	 * Function to unenroll all students from all courses/membership they joined via a voucher
	 * @param    int     $voucher_id  wp post id of the voucher
	 * @return   void
	 */
	function unenroll_from_voucher( $voucher_id ) {

		$voucher = new LLMS_Voucher( $voucher_id );

		$users = wp_list_pluck( $voucher->get_redeemed_codes(), 'user_id' );

		$products = $voucher->get_products();

		foreach ( $users as $uid ) {

			foreach ( $products as $pid ) {

				llms_unenroll_student( $uid, $pid );

			}

		}

	}

	// use it
	$voucher_id = 1234; // wp post id of the voucher
	unenroll_from_voucher( $voucher_id );