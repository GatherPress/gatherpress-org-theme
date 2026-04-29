<?php
/**
 * Title: Hero Events
 * Slug: gatherpress-org-theme/hero-events
 * Categories: gatherpress_event
 *
 * Default image: "A person holding a pen is taking notes at a table during a presentation."
 * Photo by Nilo Velez — CC0 via WordPress Photo Directory.
 *
 * @link https://wordpress.org/photos/photo/57267ab11b/
 */

$default_image = esc_url( get_theme_file_uri( 'assets/images/default-event.jpg' ) );
?>
<!-- wp:cover {"url":"<?php echo $default_image; ?>","alt":"<?php esc_attr_e( 'People collaborating at an event', 'gatherpress-org-theme' ); ?>","dimRatio":70,"overlayColor":"contrast","minHeight":480,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl);min-height:480px"><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'People collaborating at an event', 'gatherpress-org-theme' ); ?>" src="<?php echo $default_image; ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800"}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-weight:800"><?php esc_html_e( 'Welcome to Our Community', 'gatherpress-org-theme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}},"textColor":"base","fontSize":"md"} -->
<p class="has-text-align-center has-base-color has-text-color has-md-font-size" style="margin-top:var(--wp--preset--spacing--md)"><?php esc_html_e( 'We host events that bring people together. Come learn, share, and connect with us.', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xl"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xl)"><!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"8px"},"typography":{"fontWeight":"600"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="#upcoming-events" style="border-radius:8px;font-weight:600"><?php esc_html_e( 'See Upcoming Events', 'gatherpress-org-theme' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
