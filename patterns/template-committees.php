<?php
/**
 * Title: Template — Committees Archive
 * Slug: aisf/template-committees
 * Template Types: archive-aisf_committee
 * Description: Committees page with hero, interactive Italy map + searchable list, and new committee CTA.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"backgroundColor":"ink","textColor":"paper","align":"full","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">Comitati Locali</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6);font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95">Una rete,<br><span style="color:var(--wp--preset--color--tangerine)">in tutta Italia.</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">Ogni comitato è gestito da un direttivo di studenti del proprio ateneo. Trova il tuo sulla mappa — se manca, puoi avviarlo tu.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:aisf/committees-map /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"textColor":"ink","gradient":"tangerine-cta","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"border":{"radius":"var:preset|border-radius|xl"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-ink-color has-tangerine-cta-gradient-background has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--4)"><!-- wp:paragraph {"textColor":"text-muted","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase","textAlign":"center"}}} -->
<p class="has-text-align-center has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">02 — Nuovo comitato</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"clamp(28px, 4vw, 44px)","lineHeight":"1.05","letterSpacing":"-0.02em","textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(28px, 4vw, 44px);letter-spacing:-0.02em;line-height:1.05">Non trovi il tuo ateneo?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"aisf-measure","style":{"typography":{"fontSize":"16px","lineHeight":"1.55","textAlign":"center"}}} -->
<p class="has-text-align-center aisf-measure" style="font-size:16px;line-height:1.55">Avviare un comitato locale è semplice — basta un gruppo di studenti motivati. Ti supportiamo in ogni fase, dalla burocrazia all'organizzazione del primo evento.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#">Leggi la guida</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:info@ai-sf.it">Scrivici →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
