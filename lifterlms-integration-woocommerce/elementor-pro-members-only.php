<?php // <- do not copy this line.
/**
 * Hide add to cart button when using Elementor Pro
 * on single members only products.
 */
add_action(
  'wp_footer',
  function() {
?>
<script>
const membersOnlyButton = document.querySelector( '.elementor-add-to-cart form + .llms-wc-members-only-button-wrap' );
if ( membersOnlyButton ) {
    membersOnlyButton.parentNode.querySelector( 'form' )?.remove();
} 
</script>    
<?php
  }
);
