<?php
/**
 * Title: Template — Executive
 * Slug: aisf/template-executive
 * Template Types: page-esecutivo
 * Description: Executive board page with hero, member grid, and past mandates.
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
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">Comitato Esecutivo</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(48px, 7vw, 96px)","lineHeight":"0.95","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|6"}}}} -->
<h1 class="wp-block-heading" style="font-size:clamp(48px, 7vw, 96px);letter-spacing:-0.03em;line-height:0.95;margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--6)">Chi<br/><span style="color:var(--wp--preset--color--tangerine)">guida AISF.</span></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:18px;line-height:1.55">L'organo amministrativo &egrave; composto da 8 membri eletti durante l'Assemblea Generale Annuale. Mandato 2025&ndash;2026, dal 27 marzo 2025.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">01 &mdash; Mandato attuale</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2} -->
<h2 class="wp-block-heading">CE 2025 &ndash; 2026</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"aisf_executive","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|card"},"borderColor":"rule-light","backgroundColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);box-shadow:var(--wp--preset--shadow--card)">

<!-- wp:post-featured-image {"aspectRatio":"4/3","sizeSlug":"medium","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)">

<!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"600","letterSpacing":"-0.01em"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;text-transform:uppercase"><!-- wp:post-meta {"key":"_executive_role"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:post-excerpt {"length":25,"style":{"typography":{"fontSize":"13px","lineHeight":"1.55"}},"textColor":"text-muted"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|4"}},"border":{"top":{"color":"var:preset|color|rule-light","width":"1px"}}}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--rule-light);border-top-width:1px;padding-top:var(--wp--preset--spacing--4)">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.06em"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.06em"><!-- wp:post-meta {"key":"_executive_email"} /--></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

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
