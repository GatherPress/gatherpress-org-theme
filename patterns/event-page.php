<?php
/**
 * Title: Event page pattern 
 * Slug: gatherpress-org-theme/event-page
 * Categories: banner
 * Description: Event pattern in gatherpress.
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"dimensions":{"minHeight":"63px"}},"layout":{"type":"constrained","contentSize":"358px","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:63px"><!-- wp:heading {"level":1,"className":"mission-border","fontSize":"display-1"} -->
<h1 class="wp-block-heading mission-border has-display-1-font-size">Explore Events</h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"#2f312e"}}},"color":{"text":"#2f312e"},"typography":{"fontSize":"30px"}}} -->
<h2 class="wp-block-heading has-text-align-left has-text-color has-link-color" style="color:#2f312e;font-size:30px">Events happening in your city</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"gatherpress_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"},"shadow":"var:preset|shadow|goal-section","dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);box-shadow:var(--wp--preset--shadow--goal-section)"><!-- wp:post-featured-image {"style":{"border":{"radius":"8px"}}} /-->

<!-- wp:group {"style":{"dimensions":{"minHeight":"206px"},"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"272px","justifyContent":"left"}} -->
<div class="wp-block-group" style="min-height:206px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"97px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"gatherpress_topic","className":"is-style-default-name topic is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"primary-blue","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"50px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50px"><!-- wp:post-title {"isLink":true,"linkTarget":"_blank","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"elements":{"link":{"color":{"text":"var:preset|color|charcoal-black"}}}},"textColor":"charcoal-black","fontSize":"medium-18"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:image {"id":2595,"sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"3px"}}}} -->
<figure class="wp-block-image size-full" style="margin-top:3px"><img src="https://wp-gatherpresstheme.addwebprojects.com/wp-content/uploads/2025/10/person-1.svg" alt="" class="wp-image-2595"/></figure>
<!-- /wp:image -->

<!-- wp:post-author-name {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|5","bottom":"0"}}}} /--></div>
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





