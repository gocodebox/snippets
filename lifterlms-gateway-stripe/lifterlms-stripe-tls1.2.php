<?php // Don't copy this line!
/**
 * https://lifterlms.com/docs/lifterlms-stripe-tls-1-2/
 *
 * @since 2016-08-22
 */
/**
 * Force TLS 1.2 for WordPress HTTP requests
 * 
 * BEWARE:
 * If TLS 1.2 becomes compromised and a newer version is released or required you will need to update
 * this snippet!
 * 
 * This also may not work
 * 
 * More info at https://lifterlms.com/docs/lifterlms-stripe-tls-1-2/
 */
function my_tls_fix( $version ) {
  curl_setopt( $handle, CURLOPT_SSLVERSION, 6 );	
}
add_filter( 'http_api_curl', 'my_tls_fix' );