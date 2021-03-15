<?php // Don't copy this line!
/**
 * llms-email-subsrcibers-admin-menu-fix.php
 *
 * @since 2017-06-26
 */

/**
 * Temporary fix for admin menu conflict with the Email Subscribers & Newsletters plugin
 */
function my_lifterlms_menu_fix() {
	if ( class_exists( 'es_cls_registerhook' ) && method_exists( 'es_cls_registerhook', 'es_adminmenu' ) ) {
		es_cls_registerhook::es_adminmenu();
	}
}
add_action( 'admin_menu', 'my_lifterlms_menu_fix', 999999, 1 );
