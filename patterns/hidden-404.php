<?php
/**
 * Title: 404
 * Slug: gatherpress-org-theme/hidden-404
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"}}},"layout":{"type":"constrained","contentSize":"480px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)">
	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"6rem","fontWeight":"800","lineHeight":"1"}},"textColor":"accent"} -->
	<h1 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:6rem;font-weight:800;line-height:1">404</h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|md"}}},"textColor":"contrast","fontSize":"xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-xl-font-size" style="font-weight:700;margin-top:var(--wp--preset--spacing--md)"><?php echo esc_html_x( 'Page not found', '404 error message', 'gatherpress-org-theme' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|xl"}}},"textColor":"contrast-muted"} -->
	<p class="has-text-align-center has-contrast-muted-color has-text-color" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--xl)"><?php echo esc_html_x( 'The page you are looking for doesn\'t exist or has been moved. Try searching below.', '404 error message', 'gatherpress-org-theme' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search\u2026","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
</div>
<!-- /wp:group -->
