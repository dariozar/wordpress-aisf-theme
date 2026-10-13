<?php
/**
 * Title: Template — Single Event
 * Slug: aisf/template-single-event
 * Template Types: single-aisf_event
 * Description: Single event with hero image, content and info box on the right.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":70,"overlayColor":"ink","minHeight":420,"minHeightUnit":"px","contentPosition":"bottom left","align":"full","className":"is-light aisf-event-cover","style":{"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}},"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|8"}}}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left is-light aisf-event-cover" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:140px;padding-bottom:var(--wp--preset--spacing--8);min-height:420px"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"backgroundColor":"tangerine","textColor":"ink","className":"aisf-pill","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_date"}}}}} -->
<p class="aisf-pill has-ink-color has-tangerine-background-color has-text-color has-background" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase"></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(36px, 6vw, 72px)","lineHeight":"1","letterSpacing":"-0.02em"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.1em","textTransform":"uppercase"}},"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_type"}}}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.1em;text-transform:uppercase"></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.1em;text-transform:uppercase">·</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.1em","textTransform":"uppercase"}},"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_location"}}}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.1em;text-transform:uppercase"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:columns {"className":"aisf-event-layout","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|7"}}}} -->
<div class="wp-block-columns aisf-event-layout"><!-- wp:column {"width":"68%"} -->
<div class="wp-block-column" style="flex-basis:68%"><!-- wp:group {"backgroundColor":"paper","className":"aisf-event-article","borderColor":"rule-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"radius":"var:preset|border-radius|xl","width":"1px"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group aisf-event-article has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--8)"><!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"32%","className":"aisf-event-side"} -->
<div class="wp-block-column aisf-event-side" style="flex-basis:32%"><!-- wp:aisf/event-info /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
