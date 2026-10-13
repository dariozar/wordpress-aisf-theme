<?php
/**
 * Title: Chapters Section
 * Slug: aisf/chapters-section
 * Description: Map + chapter list 2-column layout.
 * Categories: aisf/sections
 * Keywords: chapters, map
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:paragraph {"className":"is-style-tag","style":{"typography":{"letterSpacing":"0.14em","fontSize":"12px"},"spacing":{"margin":{"bottom":"var:preset|spacing|2"}}}} -->
<p class="is-style-tag" style="font-size:12px;letter-spacing:0.14em;margin-bottom:var(--wp--preset--spacing--2)">04 &mdash; Comitati locali</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">Una rete,<br>in tutta Italia.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:18px;line-height:1.55">Ogni comitato locale &egrave; gestito da un piccolo direttivo studentesco in un ateneo. Trova il tuo &mdash; se non c'&egrave; ancora, puoi avviarlo tu.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/comitati">Trova il tuo comitato</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="mailto:esecutivo@ai-sf.it">Avvia un nuovo comitato &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:aisf/committees-list /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"borderColor":"rule-light","backgroundColor":"paper-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-2-background-color has-background has-border-color has-rule-light-border-color" style="border-style:dashed;border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

<!-- wp:aisf/committees-dots /-->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
