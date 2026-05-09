<?php
/**
 * Title: Chapters Section
 * Slug: aisf/chapters-section
 * Description: Map + chapter list 2-column layout.
 * Categories: aisf/sections
 * Keywords: chapters, map, cities
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns">

<!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"12px","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase">04 &mdash; Comitati locali</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">Quaranta citt&agrave;,<br/>una rete.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:18px;line-height:1.55">Ogni comitato locale &egrave; gestito da un piccolo direttivo studentesco in un ateneo. Trova il tuo qui sotto &mdash; se non c'&egrave; ancora, puoi avviarlo tu.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/comitati">Trova il tuo comitato</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="#">Avvia un nuovo comitato &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"aisf_committee","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false},"style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
<div class="wp-block-query" style="margin-top:var(--wp--preset--spacing--6)">
<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3"}},"border":{"top":{"color":"var:preset|color|rule-light","width":"1px"}}}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--rule-light);border-top-width:1px;padding-top:var(--wp--preset--spacing--3);padding-bottom:var(--wp--preset--spacing--3)">
<!-- wp:post-title {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"14px","fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}}} /-->
</div>
<!-- /wp:group -->
<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%">
<!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"borderColor":"rule-light","backgroundColor":"paper-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-2-background-color has-background has-border-color has-rule-light-border-color" style="border-style:dashed;border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

<!-- wp:image {"width":"100%","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/italy-map.svg" alt="Mappa Italia" style="width:100%"/></figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
