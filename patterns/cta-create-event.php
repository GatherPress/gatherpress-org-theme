<?php
/**
 * Title: About the Community
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
<h2 class="wp-block-heading has-base-color has-text-color has-link-color"><?php esc_html_e( 'About Our Community', 'gatherpress-org-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"md"} -->
<p class="has-base-color has-text-color has-link-color has-md-font-size" style="margin-top:var(--wp--preset--spacing--md)"><?php esc_html_e( 'We bring people together through events that inspire, connect, and empower. Whether you are attending your first meetup or your hundredth, there is a place for you here.', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"sm"} -->
<p class="has-base-color has-text-color has-link-color has-sm-font-size"><?php esc_html_e( 'Browse our upcoming events below and RSVP to get started — no account needed.', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|lg"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--lg)"><!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"8px","width":"2px","color":"var:preset|color|base"},"color":{"text":"var:preset|color|base"},"typography":{"fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-border-color wp-element-button" href="/about" style="border-color:var(--wp--preset--color--base);border-width:2px;border-radius:8px;color:var(--wp--preset--color--base);font-weight:600"><?php esc_html_e( 'Learn More', 'gatherpress-org-theme' ); ?></a></div>
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
