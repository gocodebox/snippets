<?php // Don't copy this line!
/**
 * Tell Avada to filter the LifterLMS content later to avoid a variety of conflicts, specifically with quizzes.
 *
 */
function my_awb_remove_third_party_the_content_changes() {
	remove_filter( 'the_content', 'llms_get_post_content', 10 );
}
add_action( 'awb_remove_third_party_the_content_changes', 'my_awb_remove_third_party_the_content_changes' );

function my_awb_readd_third_party_the_content_changes() {
	add_filter( 'the_content', 'llms_get_post_content', 99 );
}
add_action( 'awb_readd_third_party_the_content_changes', 'my_awb_readd_third_party_the_content_changes' );
