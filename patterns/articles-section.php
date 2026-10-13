<?php
/**
 * Title: Articles Section
 * Slug: aisf/articles-section
 * Description: 3-column articles/journal grid.
 * Categories: aisf/sections
 * Keywords: articles, journal, posts
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-tag","style":{"typography":{"letterSpacing":"0.14em","fontSize":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|2"}}}} -->
<p class="is-style-tag" style="margin-bottom:var(--wp--preset--spacing--2);font-size:12px;letter-spacing:0.14em">05 — Articoli</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Dalla rivista<br>studentesca.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="/articoli/">Tutti gli articoli →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"backgroundColor":"paper","className":"aisf-card","borderColor":"rule-light","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-card has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"aspectRatio":"16/10","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<div class="wp-block-group has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;text-transform:uppercase"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
