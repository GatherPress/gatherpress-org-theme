<?php
/**
 * Title: Footer
 * Slug: gatherpress-org-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"0","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--lg);padding-bottom:0;padding-left:var(--wp--preset--spacing--lg)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|2-xl","left":"var:preset|spacing|2-xl"},"padding":{"bottom":"var:preset|spacing|3-xl"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"lg"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}}},"textColor":"contrast-muted"} -->
<p class="has-contrast-muted-color has-text-color has-link-color"><?php esc_html_e( 'Open-source tools for organizing events that bring people together. Built by the community, for the community.', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"md"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-md-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Navigation', 'gatherpress-org-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"contrast-muted","overlayBackgroundColor":"contrast","overlayTextColor":"base","fontSize":"sm","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"md"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-md-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Connect', 'gatherpress-org-theme' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#FFFFFF","openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|md"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"color":{"background":"#374151"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#374151;color:#374151"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}}},"textColor":"contrast-muted","fontSize":"sm"} -->
<p class="has-text-align-center has-contrast-muted-color has-text-color has-link-color has-sm-font-size"><?php
printf(
	/* translators: %s: current year */
	esc_html__( 'Copyright %s. All rights reserved.', 'gatherpress-org-theme' ),
	esc_html( gmdate( 'Y' ) )
);
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
