<?php
/**
 * Title: Template — 404
 * Slug: aisf/template-404
 * Template Types: 404
 * Description: 404 page template.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|11","bottom":"var:preset|spacing|11"}}},"layout":{"type":"constrained","contentSize":"740px"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--11);padding-bottom:var(--wp--preset--spacing--11)">

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(48px, 8vw, 120px)","lineHeight":"1"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(48px, 8vw, 120px);line-height:1">404</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"}}} -->
<p class="has-text-align-center" style="font-size:18px">Pagina non trovata. Forse stavi cercando qualcosa da un'altra parte.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/">Torna alla homepage &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
