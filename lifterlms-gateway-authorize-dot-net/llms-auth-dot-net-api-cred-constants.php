<?php // Don't copy this line!
/**
 * Store Authorize.Net API Credentials as constants (in a wp-config.php file, for example) instead of saving them to the WP database (LifterLMS Authorize.Net)
 *
 * @since 2021-01-25
 */

// Sandbox (Test) API Credentails.
define( 'LLMS_AUTH_DOT_NET_TEST_CLIENT_KEY', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX' );
define( 'LLMS_AUTH_DOT_NET_TEST_LOGIN_ID', 'XXXXXXXXX' );
define( 'LLMS_AUTH_DOT_NET_TEST_TRANSACTION_KEY', 'XXXXXXXXXXXX' );

// Production (Live) API Credentails.
define( 'LLMS_AUTH_DOT_NET_LIVE_CLIENT_KEY', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX' );
define( 'LLMS_AUTH_DOT_NET_LIVE_LOGIN_ID', 'XXXXXXXXX' );
define( 'LLMS_AUTH_DOT_NET_LIVE_TRANSACTION_KEY', 'XXXXXXXXXXXX' );