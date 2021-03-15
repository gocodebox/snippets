<?php // Don't copy this line!
/**
 * Modify the language of default LifterLMS Success Notices (Messages)
 *
 * @since 2019-02-08
 */

/**
 * Modify LifterLMS Success Messages
 * @param   string    $msg Default message.
 * @return  string         Modified messag.
 */
function my_mod_llms_notices( $msg ) {

	if ( 'Check your e-mail for the confirmation link.' === $msg ) {

		$msg = 'whatever';

	} elseif ( 0 === strpos( 'Your password has been updated.', $msg ) ) {

		$msg = 'other msg...';

	}

	return $msg;

}
add_filter( 'lifterlms_add_success', 'my_mod_llms_notices' );