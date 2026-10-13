<?php
/**
 * Title: Template — Single Post
 * Slug: aisf/template-single
 * Template Types: single
 * Description: Single post template.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"740px"}} -->
<div class="wp-block-group">

<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.08em","textTransform":"uppercase"},"spacing":{"blockGap":"var:preset|spacing|3","margin":{"bottom":"var:preset|spacing|7"}}},"textColor":"text-muted"} -->
<div class="wp-block-group has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;margin-bottom:var(--wp--preset--spacing--7)">
<!-- wp:post-date /-->
</div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}}} /-->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
