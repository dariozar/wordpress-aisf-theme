<?php
/**
 * Title: Template — Documents
 * Slug: aisf/template-documents
 * Template Types: page-documenti
 * Description: Documents page with hero and document sections.
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
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">Documenti</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6)">Trasparenza<br/><span style="color:var(--wp--preset--color--tangerine)">totale.</span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">Tutti i documenti ufficiali dell'associazione, liberamente scaricabili. Statuto, regolamenti, bilanci e verbali delle riunioni.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:query {"queryId":0,"query":{"perPage":50,"pages":0,"offset":0,"postType":"aisf_document","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"default"}} -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"border":{"radius":"var:preset|border-radius|md","width":"1px"}},"borderColor":"rule-light","backgroundColor":"paper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group aisf-doc-row has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--md);padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"14px","fontWeight":"500"}}} /-->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.06em;text-transform:uppercase">PDF &middot; <!-- wp:post-meta {"key":"_document_date"} /--></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase">Scarica &rarr;</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
