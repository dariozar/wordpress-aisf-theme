<?php
/**
 * Title: Template — Events Archive
 * Slug: aisf/template-events
 * Template Types: archive-aisf_event
 * Description: Events archive with dark hero and featured event.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">Eventi nazionali</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6)">In giro<br/><span style="color:var(--wp--preset--color--tangerine)">per l'Italia.</span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">Sei eventi principali all'anno, oltre agli incontri mensili in ogni sede. Quasi tutti aperti anche ai non soci.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">01 &mdash; In programma</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">Prossimi eventi</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"aisf_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"borderColor":"rule-light","backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"}},"border":{"radius":"999px"}},"backgroundColor":"tangerine","textColor":"ink"} -->
<p class="has-ink-color has-tangerine-background-color has-text-color has-background" style="border-radius:999px;font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;text-transform:uppercase"><!-- wp:post-meta {"key":"_event_date"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"22px","lineHeight":"1.1","letterSpacing":"-0.015em"}}} /-->

<!-- wp:post-excerpt {"length":25,"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}},"textColor":"text-muted"} /-->

<!-- wp:separator {"backgroundColor":"rule-light","style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}}} -->
<hr class="wp-block-separator has-text-color has-rule-light-color has-alpha-channel-opacity has-rule-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--4)"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<div class="wp-block-group has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase">
<!-- wp:paragraph -->
<p><!-- wp:post-meta {"key":"_event_type"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><!-- wp:post-meta {"key":"_event_location"} /--></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

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

</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
