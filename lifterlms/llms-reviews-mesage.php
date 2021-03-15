<?php // Don't copy this line!
/**
 * llms-reviews-mesage.php
 *
 * @since 2017-08-07
 */

/**
 * Output a custom message before / after LLMS reviews
 */
function my_custom_reviews_message() {
?>

<!-- put custom html below this line -->

<p>My custom message goes here</p>

<!-- put custom html above this line -->

<?php
}
add_action( 'lifterlms_single_course_after_summary', 'my_custom_reviews_message', 99 ); // change "99" to "101" to but the message below the reviews content