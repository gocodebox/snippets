<?php // Don't copy this line!
/**
 * Modify the request URL for downloading certificate exports
 *
 * @since 2018-06-04
 */
<?php // don't copy this line to your functions.php file

add_filter( 'llms_get_certificate_export_html_url', function( $url, $certificate_id ) {

	$ip_address = '127.0.0.1'; // replace with your server's IP address

	$url = str_replace( home_url(), $ip_address, $url );
	return $url;

}, 10, 2 );
