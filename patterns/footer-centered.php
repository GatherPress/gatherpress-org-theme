<?php
/**
 * Title: Centered footer
 * Slug: gatherpress/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Footer with centered site title and tagline.
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
		<!-- wp:site-tagline {"textAlign":"center"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
	<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
		<?php
		printf(
			/* translators: Designed with WordPress. %s: WordPress link. */
			esc_html__( 'Designed with %s', 'gatherpress' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'gatherpress' ) ) . '" rel="nofollow">WordPress</a>'
		);
		?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
