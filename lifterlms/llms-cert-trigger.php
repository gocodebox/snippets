<?php // Don't copy this line!
/**
 * llms-cert-trigger.php
 *
 * @since 2016-10-05
 */
$certs = LLMS()->certificates(); // our certs class
$cert_id = 123; // this should be the WP Post ID of the certificate you created on the admin panel via LLMS
$related_post_id = 456; // this is really for record keeping only at the moment
						// should be the WP post id of the course, lesson, or section which
						// the student has completed to earn the certificate

$students = new WP_User_Query(); // get your students however you see fit

if ( ! empty( $students->results ) ) {
	
	foreach ( $students->results as $student ) {

		$certs->trigger_engagement( $student->ID, $certificate_id, $related_post_id );

	}
	
}


