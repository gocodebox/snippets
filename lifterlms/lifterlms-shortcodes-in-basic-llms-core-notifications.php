<?php // <- do not copy this line
/**
 * Allow shortcodes to be rendered in basic notifications.
 *
 * @since 2023-17-05
 */
 $filters = [
	'course_complete',
	'course_track_complete',
	'section_complete',
	'lesson_complete',
	'achievement_earned',
	'certificate_earned',
	'enrollment',
	'manual_payment_due',
	'payment_retry',
	'purchase_receipt',
	'quiz_failed',
	'quiz_graded',
	'quiz_passed',
	'section_complete',
	'student_welcome',
	'subscription_cancelled',
	'upcoming_payment_reminder',
];

foreach ( $filters as $filter ) {
	add_filter( "llms_notification_view{$filter}_get_basic_html", 'do_shortcode' );
}
