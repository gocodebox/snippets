<?php // Don't copy this line!
/**
 * Remove frontend notifications from LifterLMS
 *
 * @since 2018-04-20
 */

// Copy from under this line and paste into your child theme's functions.php

add_action( 'init', 'llms_turn_off_notifications', 10, 999 );
add_action( 'wp_enqueue_scripts', 'llms_dequeue_notification_script', 10, 999 );

if ( ! function_exists( 'llms_turn_off_notifications' ) ){
	function llms_turn_off_notifications(){

		// an array of all the notification ids in https://github.com/gocodebox/lifterlms/tree/master/includes/notifications/controllers
		$notification_ids = array(
			'achievement_earned',
			'certificate_earned',
			'course_complete',
			'course_track_complete',
			'enrollment',
			'lesson_complete',
			'section_complete',
			'student_welcome',
			'purchase_receipt',
			'quiz_failed',
			'quiz_passed',
			'manual_payment_due',
			'payment_retry',
		);
		
		// filter out basic notifications
		foreach( $notification_ids as $notification ){
			add_filter( 'llms_notification_' . $notification . '_subscriber_options', 'llms_remove_basic_notifications', 10, 2 );
		}
	}
}
if ( ! function_exists( 'llms_remove_basic_notifications' ) ){
	
	function llms_remove_basic_notifications( $subscriber_options, $type ){
		
		// only remove basic notifications, leaving emails in place
		if ( $type != 'basic' ){
			return $subscriber_options
		}

		return array();
	}
}

if ( ! function_exists( 'llms_dequeue_notification_script' ) ){
	
	function llms_dequeue_notification_script(){
		// dequeue the notifications script
		wp_dequeue_script( 'llms-notifications' );
	}
}