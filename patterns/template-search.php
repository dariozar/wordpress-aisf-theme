<?php
/**
 * Title: Template — Search
 * Slug: aisf/template-search
 * Template Types: search
 * Description: Search results template.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"140px","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:140px;padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"},"margin":{"bottom":"var:preset|spacing|7"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)">
<!-- wp:query-title {"type":"search","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"var:preset|font-size|x-large"}}} /-->
<!-- wp:search {"label":"Cerca"} /-->
</div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
<!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-title {"level":2,"isLink":true} /-->
<!-- wp:post-excerpt /-->
<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->
<!-- /wp:post-template -->
<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Nessun risultato trovato. Prova con altri termini di ricerca.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
