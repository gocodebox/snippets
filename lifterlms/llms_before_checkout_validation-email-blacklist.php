<?php // Don't copy this line!
/**
 * Create an email blacklist to prevent spam checkouts when using LifterLMS
 *
 * @since 2020-03-12
 */

/**
 * Create an email blacklist to prevent spam registrations during LifterLMS checkout
 *
 * This is hooked to llms_before_checkout_validation
 *
 * This filter runs prior to any built-in checkout form validations allowing custom
 * validations to be run.
 *
 * @since 2020-03-12
 * 
 * @link https://developer.lifterlms.com/reference/hooks/llms_before_checkout_validation/
 *
 * @param mixed $valid Validation status. If `false` there's no prior validation issues and checkout will proceed as usual.
 *                     If `$valid` is a truthy, it indicates that another function has found custom validation issues and
 *                     it may not be necessary to proceed. 
 * @return bool `false` when there are no issues, `true` if there are issues.
 */
function my_llms_checkout_blacklist( $valid ) {

	// If $valid is already a truthy, return early since something else already encountered a validation issue.
	if ( $valid ) {
		return $valid;
	}

	// Exit early if no email submitted somehow.
	$email = llms_filter_input( INPUT_POST, 'email_address', FILTER_SANITIZE_EMAIL );
	if ( ! $email ) {
		return $valid;
	} 


	/**
	 * Blacklist of specific email addresses or regex patterns.
	 *
	 * Any email matching a specific email on this list or a pattern
	 * will be blocked.
	 *
	 * This list is a list of regular expressions, even for specific email addresses.
	 *
	 * Special characters (punctuation) should (mostly) be escaped with a backslash (\) characters.
	 *
	 * You can test regular expressions here: https://regex101.com/
	 */
	$blacklist = array(
		
		 // Block a specific address(es).
		'/blockthis@test\.com/',

		// Block by Regex.
		// [0-9]+ = Matches any number of numbers.
		'/fake[0-9]+@fake\.tld/',

	);

	foreach ( $blacklist as $pattern ) {

		// We've found something on the blacklist.
		if ( preg_match( $pattern, $email ) ) {

			// Customize the error message displayed when a registration is blocked.
			llms_add_notice( __( 'Blocked.', 'my-text-domain' ), 'error' );
			return true;

		}

	}

	// We're okay to proceed.
	return $valid;

}
add_filter( 'llms_before_checkout_validation', 'my_llms_checkout_blacklist' );