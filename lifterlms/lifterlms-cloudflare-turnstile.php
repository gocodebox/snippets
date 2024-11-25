<?php
/**
 * LifterLMS Turnstile Support for Checkout and Open Registration

 * Plugin Name: LifterLMS Turnstile Support
 * Plugin URI: https://lifterlms.com/
 * Description: Adds Cloudflare Turnstile support to LifterLMS Checkout and Open Registration forms.
 * Version: 1.0
 * Author: LifterLMS
 * Author URI: https://lifterlms.com/
 * Text Domain: lifterlms-turnstile
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 5.9
 * Tested up to: 6.7
 * Requires PHP: 7.4
 */

// Change here or put these into your wp-config.php file.
// Keys are obtained when creating a new Widget in Cloudflare Turnstile.
if ( ! defined( 'LLMS_TURNSTILE_SECRET_KEY' ) ) {
  define( 'LLMS_TURNSTILE_SECRET_KEY', 'secret-key' );
}
if ( ! defined( 'LLMS_TURNSTILE_SITE_KEY' ) ) {
  define( 'LLMS_TURNSTILE_SITE_KEY', 'site-key' );
}

function llms_add_turnstile_script() {
    wp_enqueue_script('cloudflare-turnstile', 'https://challenges.cloudflare.com/turnstile/v0/api.js');
}
add_action( 'wp_head', 'llms_add_turnstile_script' );

function llms_add_turnstile_check() { ?>
    <div class="cf-turnstile" data-sitekey="<?php echo esc_attr( LLMS_TURNSTILE_SITE_KEY ); ?>"></div>
    <?php
}
add_action( 'llms_checkout_footer_before', 'llms_add_turnstile_check' );
add_action( 'lifterlms_after_registration_fields', 'llms_add_turnstile_check' );

function llms_validate_turnstile( $valid ) {
    // If $valid is already a truthy, return early since something else already encountered a validation issue.
    if ( $valid ) {
        return $valid;
    }

    // If we don't have a response to test, return an error and stop registration.
    $captcha = llms_filter_input_sanitize_string( INPUT_POST, 'cf-turnstile-response' );
    if ( ! $captcha ) {
        error_log( "checkout blocked due to missing captcha" );
        // Customize the error message displayed when a registration is blocked.
        llms_add_notice( __( 'Blocked.', 'my-text-domain' ), 'error' );
        return true;
    }

    // Ok, try to validate the captcha.
    if ( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) && filter_var( $_SERVER['HTTP_CF_CONNECTING_IP'], FILTER_VALIDATE_IP ) ) {
        // Use the CloudFlare IP if it exists.
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $url_path = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $data = array( 'secret' => LLMS_TURNSTILE_SECRET_KEY, 'response' => $captcha, 'remoteip' => $ip );
    $options = array(
        'http' => array(
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "User-Agent: PHP Script\r\n",
            'method' => 'POST',
            'content' => http_build_query( $data )
        )
    );
    $stream = stream_context_create( $options );
    $result = file_get_contents( $url_path, false, $stream );
    $response = $result;
    $response_keys = json_decode( $response, true );

    if ( intval( $response_keys["success"] ) !== 1 ) {
        // Not valid. Block them.
        // Customize the error message displayed when a registration is blocked.
        llms_add_notice( __( 'Blocked.', 'my-text-domain' ), 'error' );
        return true;
    }

    // We're okay to proceed.
    return $valid;
}
add_filter( 'llms_before_checkout_validation', 'llms_validate_turnstile' );
add_filter( 'llms_before_registration_validation', 'llms_validate_turnstile' );
