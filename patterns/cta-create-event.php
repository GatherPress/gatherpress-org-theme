<?php
/**
 * Title: Join Our Community CTA
 * Slug: gatherpress-org-theme/cta-create-event
 * Categories: gatherpress_event
 *
 * Image: "Person taking notes on a laptop at a WordCamp."
 * Photo by Pablo Moratinos — CC0 via WordPress Photo Directory.
 *
 * @link https://wordpress.org/photos/photo/67761b1e1e/
 */

$community_image = esc_url( get_theme_file_uri( 'assets/images/community.jpg' ) );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|2-xl"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'Join Our Community', 'gatherpress-org-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"md"} -->
<p class="has-base-color has-text-color has-link-color has-md-font-size" style="margin-top:var(--wp--preset--spacing--md)"><?php esc_html_e( 'Connect with like-minded people, attend events, and be part of something meaningful.', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xl)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px","width":"2px","color":"var:preset|color|base"},"color":{"text":"var:preset|color|base"},"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-border-color wp-element-button" href="<?php echo esc_url( wp_registration_url() ); ?>" style="border-color:var(--wp--preset--color--base);border-width:2px;border-radius:8px;color:var(--wp--preset--color--base);font-weight:600"><?php esc_html_e( 'Get Involved', 'gatherpress-org-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"12px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo $community_image; ?>" alt="<?php esc_attr_e( 'Person taking notes on a laptop at a community event', 'gatherpress-org-theme' ); ?>" style="border-radius:12px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
