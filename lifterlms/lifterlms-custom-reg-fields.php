<?php // Don't copy this line!
/**
 * lifterlms-custom-reg-fields.php
 *
 * @since 2016-07-05
 */
// add an action to the hook
add_action( 'lifterlms_register_form', 'my_custom_lifterlms_registration_fields' );
// create the function that add_action will call
// this function should echo or output html
// the HTML below follows the format of the other fields LifterLMS outputs by default
function my_custom_lifterlms_registration_fields() {
?>


	<div class="llms-form-item-wrapper password">
		<label for="my_field"><?php _e( 'A Custom Field', 'my_text_domain' ); ?></label>
		<input type="text" class="input-text llms-input-text" name="my_field_name" id="my_field" />
	</div>


<?php
	
	// if you want to create more than one field go ahead!


}
?>