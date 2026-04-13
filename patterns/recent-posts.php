<?php
/**
 * Title: Recent Posts
 * Slug: gatherpress-org-theme/recent-posts
 * Categories: gatherpress_page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-bottom:var(--wp--preset--spacing--3-xl)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-center has-contrast-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--2-xl)"><?php esc_html_e( 'Latest News', 'gatherpress-org-theme' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-subtle"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|lg","left":"0","right":"0"},"blockGap":"0"},"shadow":"var:preset|shadow|sm"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:1px;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--lg);padding-left:0;box-shadow:var(--wp--preset--shadow--sm)"><!-- wp:post-featured-image {"aspectRatio":"3/2","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","left":"var:preset|spacing|lg","right":"var:preset|spacing|lg"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontSize":"lg"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-muted"}}}},"textColor":"contrast-muted","fontSize":"sm"} /-->

<!-- wp:post-excerpt {"excerptLength":20,"moreText":"","showMoreOnNewLine":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|sm"}}},"textColor":"contrast-muted","fontSize":"sm"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"contrast-muted"} -->
<p class="has-text-align-center has-contrast-muted-color has-text-color"><?php esc_html_e( 'No posts yet — check back soon!', 'gatherpress-org-theme' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2-xl"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--2-xl)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<p class="has-base-font-size" style="font-weight:600"><a href="/blog/"><?php esc_html_e( 'View All Posts', 'gatherpress-org-theme' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
