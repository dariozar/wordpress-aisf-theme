<?php
/**
 * Title: Header
 * Slug: aisf/header
 * Description: Fixed floating navigation with logo, links, language switch, and CTA.
 * Categories: aisf/header
 * Keywords: header, nav
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"is-style-glass","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","right":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"0"},"border":{"radius":"16px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-glass" style="border-radius:16px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">

<!-- wp:image {"width":"40px","sizeSlug":"full","linkDestination":"/"} -->
<figure class="wp-block-image size-full is-resized"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/aisf-logo.png" alt="AISF" style="width:40px"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"ref":0,"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"clamp(16px, 2.2vw, 28px)"}}} -->
<!-- wp:navigation-link {"label":"Chi siamo","url":"/#about","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Eventi","url":"/eventi","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Progetti","url":"/#projects","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Comitati","url":"/comitati","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Documenti","url":"/documenti","kind":"custom","type":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap"},"className":"aisf-lang-switch"} -->
<div class="wp-block-group aisf-lang-switch">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
<p style="font-family:var(--wp--preset--font-family--mono);font-size:11px;font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase">IT</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;text-transform:uppercase">&middot;</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;text-transform:uppercase">EN</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#join">Iscriviti &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
