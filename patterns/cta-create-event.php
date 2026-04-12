<?php
/**
 * Title: Create Event CTA
 * Slug: gatherpress-org-theme/cta-create-event
 * Categories: gatherpress_event
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
		<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color"><?php esc_html_e( 'Ready to host?', 'gatherpress-org-theme' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"md"} -->
		<p class="has-text-align-center has-base-color has-text-color has-link-color has-md-font-size" style="margin-top:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Create your own event and bring people together', 'gatherpress-org-theme' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xl)">
			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px","width":"2px","color":"var:preset|color|base"},"color":{"text":"var:preset|color|base"},"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-border-color wp-element-button" href="/events/add/" style="border-color:var(--wp--preset--color--base);border-width:2px;border-radius:8px;color:var(--wp--preset--color--base);font-weight:600"><?php esc_html_e( 'Create an Event', 'gatherpress-org-theme' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
