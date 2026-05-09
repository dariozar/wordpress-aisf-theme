<?php
/**
 * Title: Page Hero
 * Slug: aisf/page-hero
 * Description: Generic dark page hero with eyebrow, title, and lead paragraph.
 * Categories: aisf/hero
 * Keywords: hero, header, page
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.14em","fontSize":"12px"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase"><!-- wp:post-title /--></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} /-->

</div>
<!-- /wp:group -->
