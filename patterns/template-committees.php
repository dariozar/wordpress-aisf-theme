<?php
/**
 * Title: Template — Committees Archive
 * Slug: aisf/template-committees
 * Template Types: archive-aisf_committee
 * Description: Committees page with hero, map, grid, and new committee CTA.
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
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">Comitati Locali</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6)">Quaranta citt&agrave;,<br/><span style="color:var(--wp--preset--color--tangerine)">una rete.</span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">Ogni comitato locale &egrave; gestito da un piccolo direttivo studentesco in un ateneo. Trova il tuo &mdash; se non c'&egrave; ancora, puoi avviarlo tu.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">01 &mdash; Comitati attivi</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">19 comitati attivi</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":50,"pages":0,"offset":0,"postType":"aisf_committee","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|2"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"borderColor":"rule-light","backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

<!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"20px","fontWeight":"600","letterSpacing":"-0.01em"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:14px"><!-- wp:post-meta {"key":"_committee_president"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|3"}},"border":{"top":{"color":"var:preset|color|rule-light","width":"1px"}}}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--rule-light);border-top-width:1px;padding-top:var(--wp--preset--spacing--3)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase">Est. <!-- wp:post-meta {"key":"_committee_established"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.06em"}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.06em"><!-- wp:post-meta {"key":"_committee_email"} /--></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- /wp:post-template -->
</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10)">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"border":{"radius":"var:preset|border-radius|xl"}},"gradient":"tangerine-cta","textColor":"ink","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-ink-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);background:var(--wp--preset--gradient--tangerine-cta);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-align-center has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">02 &mdash; Nuovo comitato</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(28px, 4vw, 44px)","lineHeight":"1.05","letterSpacing":"-0.02em"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(28px, 4vw, 44px);letter-spacing:-0.02em;line-height:1.05">Non trovi il tuo ateneo?</h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}}} -->
<p class="has-text-align-center" style="font-size:16px;line-height:1.55">Avviare un comitato locale &egrave; semplice &mdash; basta un gruppo di studenti motivati. Ti supportiamo in ogni fase, dalla burocrazia all'organizzazione del primo evento.</p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Leggi la guida</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:info@ai-sf.it">Scrivici &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
