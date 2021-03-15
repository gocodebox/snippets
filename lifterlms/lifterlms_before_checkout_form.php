<?php // Don't copy this line!
/**
 * lifterlms_before_checkout_form.php
 *
 * @since 2016-10-12
 */
/**
 * Output custom html after the LifterLMS Checkout Form
 */
function my_custom_content() {
  
   echo '<p>Enter your billing information below to continue!</p>'; // because we all know users get easily lost...
  
}
// add the action
add_action( 'lifterlms_before_checkout_form', 'my_custom_content' );