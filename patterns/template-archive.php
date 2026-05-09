<?php
/**
 * Title: Template — Archive
 * Slug: aisf/template-archive
 * Template Types: archive, category, tag, author, date
 * Description: Default archive template.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"},"margin":{"bottom":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)">
<!-- wp:query-title {"type":"archive","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"var:preset|font-size|x-large"}}} /-->
<!-- wp:term-description {"style":{"typography":{"fontSize":"var:preset|font-size|medium"}},"textColor":"text-muted"} /-->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|card"},"borderColor":"rule-light","backgroundColor":"paper"} -->
<div class="wp-block-group has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5);box-shadow:var(--wp--preset--shadow--card)">
<!-- wp:post-featured-image {"aspectRatio":"16/10"} /-->
<!-- wp:post-title {"level":3,"isLink":true} /-->
<!-- wp:post-excerpt {"length":20} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
