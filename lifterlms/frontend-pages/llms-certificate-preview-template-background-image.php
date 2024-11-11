<?php
/**
 * Single Certificate Preview Template with the awarded certificate background image added.
 * For the templates/certificates/preview.php template.
 * See https://lifterlms.com/docs/lifterlms-templates/ for how to override templates in LifterLMS.
 */

defined( 'ABSPATH' ) || exit;

?>
<a
	class="llms-certificate"
	data-id="<?php echo esc_attr( $certificate->get( 'id' ) ); ?>"
	href="<?php echo esc_url( get_permalink( $certificate->get( 'id' ) ) ); ?>"
	id="<?php printf( 'llms-certificate-%d', esc_attr( $certificate->get( 'id' ) ) ); ?>"
	<?php if ( has_post_thumbnail( $certificate->get( 'id' ) ) ) : ?>
		style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( $certificate->get( 'id' ) ) ); ?>'); background-size: cover;"
	<?php endif; ?>
>

	<?php do_action( 'lifterlms_before_certificate_preview', $certificate ); ?>

	<h4 class="llms-certificate-title"><?php echo esc_html( $certificate->get( 'title' ) ); ?></h4>
	<div class="llms-certificate-date"><?php echo esc_html( $certificate->get_earned_date() ); ?></div>

	<?php do_action( 'lifterlms_after_certificate_preview', $certificate ); ?>

</a>
