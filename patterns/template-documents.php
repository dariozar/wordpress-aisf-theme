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
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"backgroundColor":"ink","textColor":"paper","align":"full","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","letterSpacing":"-0.03em","lineHeight":"0.95"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6);font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95">Trasparenza<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-tangerine-color">totale.</mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"text-on-dark-muted","style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}}} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">Tutti i documenti ufficiali dell'Associazione Italiana Studenti di Fisica, liberamente consultabili e scaricabili: Statuto e Atto Fondativo, Regolamenti, Piano Strategico e Verbali delle riunioni.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"},"blockGap":"var:preset|spacing|9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"className":"aisf-doc-section","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-doc-section"><!-- wp:heading {"level":2,"className":"aisf-doc-section__title","style":{"typography":{"fontSize":"clamp(28px, 3.6vw, 42px)","fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading aisf-doc-section__title" style="font-size:clamp(28px, 3.6vw, 42px);font-weight:600;letter-spacing:-0.025em;line-height:1.1">Statuto e Atto Fondativo</h2>
<!-- /wp:heading -->

<!-- wp:aisf/documents-list {"category":"Statuto e Atto Fondativo","groupByYear":false,"groupBySubsection":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"aisf-doc-section","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-doc-section"><!-- wp:heading {"level":2,"className":"aisf-doc-section__title","style":{"typography":{"fontSize":"clamp(28px, 3.6vw, 42px)","fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading aisf-doc-section__title" style="font-size:clamp(28px, 3.6vw, 42px);font-weight:600;letter-spacing:-0.025em;line-height:1.1">Regolamenti</h2>
<!-- /wp:heading -->

<!-- wp:aisf/documents-list {"category":"Regolamenti","groupByYear":false,"groupBySubsection":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"aisf-doc-section","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-doc-section"><!-- wp:heading {"level":2,"className":"aisf-doc-section__title","style":{"typography":{"fontSize":"clamp(28px, 3.6vw, 42px)","fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading aisf-doc-section__title" style="font-size:clamp(28px, 3.6vw, 42px);font-weight:600;letter-spacing:-0.025em;line-height:1.1">Piano Strategico</h2>
<!-- /wp:heading -->

<!-- wp:aisf/documents-list {"category":"Piano Strategico","groupByYear":false,"groupBySubsection":false} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"aisf-doc-section","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-doc-section"><!-- wp:heading {"level":2,"className":"aisf-doc-section__title","style":{"typography":{"fontSize":"clamp(28px, 3.6vw, 42px)","fontWeight":"600","letterSpacing":"-0.025em","lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading aisf-doc-section__title" style="font-size:clamp(28px, 3.6vw, 42px);font-weight:600;letter-spacing:-0.025em;line-height:1.1">Verbali</h2>
<!-- /wp:heading -->

<!-- wp:aisf/documents-list {"category":"Verbali","groupByYear":true,"groupBySubsection":true,"subsectionTitles":"Videoconferenze del Comitato Esecutivo, Videoconferenze con i Comitati Locali, Assemblea Generale Annuale","showEmptySubsections":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
