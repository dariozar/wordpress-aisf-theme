<?php
/**
 * Title: Events Section
 * Slug: aisf/events-section
 * Description: Dark panel with events grid (3 cards).
 * Categories: aisf/sections
 * Keywords: events, cards
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"backgroundColor":"ink","textColor":"paper","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"radius":"var:preset|border-radius|xl"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-color has-ink-background-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"is-style-tag-dark","style":{"typography":{"letterSpacing":"0.14em","fontSize":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|2"}}}} -->
<p class="is-style-tag-dark" style="margin-bottom:var(--wp--preset--spacing--2);font-size:12px;letter-spacing:0.14em">02 — Eventi</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">I nostri eventi,<br>in giro per l'Italia.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontSize":"15px","lineHeight":"1.5"}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:15px;line-height:1.5">Sei eventi principali all'anno, oltre agli incontri mensili in ogni sede. Quasi tutti aperti anche ai non soci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-warm"} -->
<div class="wp-block-button is-style-warm"><a class="wp-block-button__link wp-element-button" href="/eventi">Tutti gli eventi →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"aisf_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"backgroundColor":"paper","textColor":"ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ink-color has-paper-background-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"backgroundColor":"tangerine","textColor":"ink","className":"is-style-tag-tangerine","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"},"margin":{"bottom":"var:preset|spacing|1"}},"border":{"radius":"999px"}},"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_date"}}}}} -->
<p class="is-style-tag-tangerine has-ink-color has-tangerine-background-color has-text-color has-background" style="border-radius:999px;margin-bottom:var(--wp--preset--spacing--1);padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase"></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","lineHeight":"1.1","letterSpacing":"-0.015em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} /-->

<!-- wp:separator {"backgroundColor":"ink","style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--4)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_type"}}}}} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_location"}}}}} -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
