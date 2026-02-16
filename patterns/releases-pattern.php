<?php
/**
 * Title: Releases pattern
 * Slug: gatherpress/releases-pattern
 * Categories: banner
 * Description: Banner of releases.
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"120px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:120px"><!-- wp:query {"queryId":6,"query":{"perPage":10,"pages":0,"offset":0,"postType":"releases","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"className":"releases-version-cards","style":{"border":{"radius":"20px"},"shadow":"var:preset|shadow|goal-section","spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"652px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group releases-version-cards" style="border-radius:20px;min-height:652px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20);box-shadow:var(--wp--preset--shadow--goal-section)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"release_category","className":"is-style-default taxonomy-gatherpress","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|alice-blue"}}}},"backgroundColor":"primary-blue","textColor":"alice-blue"} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"}},"backgroundColor":"primary-blue","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"fontSize":"font-24"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"\u003cstrong\u003e\u003cmark style=\u0022background-color:rgba(0, 0, 0, 0)\u0022 class=\u0022has-inline-color has-charcoal-black-color\u0022\u003eRead more\u003c/mark\u003e\u003c/strong\u003e","showMoreOnNewLine":false,"excerptLength":18,"className":"read-more","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->