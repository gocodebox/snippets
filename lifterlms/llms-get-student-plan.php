<?php // Don't copy this line!
/**
 * llms-get-student-plan.php
 *
 * @since 2018-02-05
 */

$user_id = 1234;
$course_id = 5678;

$student = llms_get_student( $user_id );
if ( $student ) {
    $order_id = $student-get_enrollment_order( $course_id );
    if ( $order_id ) {
      $order = llms_get_post( $order_id);
      if ( $order ) { 
        $plan_id = $order->get( 'plan_id' );
      }
    }
}
