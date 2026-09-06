<?php
/**
 * Title: Header
 * Slug: aisf/header
 * Description: Navigation — transparent at top, becomes floating glass on scroll, dark variant over dark sections.
 * Categories: aisf/header
 * Keywords: header, nav
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","className":"aisf-nav","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aisf-nav" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:group {"align":"wide","className":"aisf-nav-inner","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","right":"clamp(16px, 4vw, 32px)","left":"clamp(16px, 4vw, 32px)"},"blockGap":"clamp(12px, 2.5vw, 24px)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide aisf-nav-inner" style="padding-top:var(--wp--preset--spacing--4);padding-right:clamp(16px, 4vw, 32px);padding-bottom:var(--wp--preset--spacing--4);padding-left:clamp(16px, 4vw, 32px)">

<!-- wp:image {"width":"clamp(32px, 4.5vw, 40px)","sizeSlug":"full","linkDestination":"/","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<figure class="wp-block-image size-full is-resized"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/aisf-logo.png" alt="AISF" style="width:clamp(32px, 4.5vw, 40px)"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"clamp(16px, 2.2vw, 28px)"}}} -->
<!-- wp:navigation-link {"label":"Chi siamo","url":"/#about","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Eventi","url":"/eventi","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Progetti","url":"/#projects","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Comitati","url":"/comitati","kind":"custom","type":"custom"} /-->
<!-- wp:navigation-link {"label":"Documenti","url":"/documenti","kind":"custom","type":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"aisf-nav-cta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group aisf-nav-cta">

<!-- wp:paragraph {"className":"aisf-lang-switch","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color aisf-lang-switch" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;margin-top:0;margin-bottom:0;text-transform:uppercase"><strong>IT</strong> &middot; EN</p>
<!-- /wp:paragraph -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#join">Iscriviti &rarr;</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
