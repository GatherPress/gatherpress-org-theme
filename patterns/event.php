<?php
/**
 * Title: Event Section
 * Slug: gatherpress/event
 * Categories: banner
 * Description: A section showcashing featured upcoming events with images, categories, dates, and organizers.
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */
?>


<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:50px"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"display-1"} -->
<h2 class="wp-block-heading has-display-1-font-size"><strong>Featured Upcoming Events</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1"},"elements":{"link":{"color":{"text":"#2f312e"}}},"color":{"text":"#2f312e"}},"fontSize":"medium-18"} -->
<p class="has-text-align-left has-text-color has-link-color has-medium-18-font-size" style="color:#2f312e;line-height:1">Learn From the Best Minds in the Industry</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline","style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"border":{"color":"#c5cdd2","width":"1px"},"color":{"text":"#1769aa"},"elements":{"link":{"color":{"text":"#1769aa"}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"fontSize":"text-twenty"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-link-color has-border-color has-text-twenty-font-size has-custom-font-size wp-element-button" href="https://wp-gatherpresstheme.addwebprojects.com/events/" style="border-color:#c5cdd2;border-width:1px;color:#1769aa;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--20);font-style:normal;font-weight:600;line-height:1">View all</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"gatherpress_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-events-list","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"shadow":"var:preset|shadow|goal-section","dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);box-shadow:var(--wp--preset--shadow--goal-section)"><!-- wp:post-featured-image {"style":{"border":{"radius":"8px"}}} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"206px"},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"272px","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:206px"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"97px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-default-name topic is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-blue","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"50px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50px"><!-- wp:post-title {"level":3,"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|charcoal-black"}}}},"textColor":"charcoal-black","fontSize":"medium-18"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":2595,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="https://wp-gatherpresstheme.addwebprojects.com/wp-content/uploads/2025/10/person-1.svg" alt="" class="wp-image-2595"/></figure>
<!-- /wp:image -->

<!-- wp:post-author-name {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0","bottom":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:gatherpress/event-date {"textAlign":"left"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->