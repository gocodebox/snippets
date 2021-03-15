<?php // Don't copy this line!
/**
 * lifterlms_after_checkout_form.php
 *
 * @since 2016-10-12
 */

/**
 * Output custom html after the LifterLMS Checkout Form
 */
function my_custom_content() {
  
   echo '<h5>Secure Checkout secured by super secret enryption protocols!</h5>'; // add a little lock icon too, amirite?
  
}

// add the action
add_action( 'lifterlms_after_checkout_form', 'my_custom_content' );
