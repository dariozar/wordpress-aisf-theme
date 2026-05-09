<?php
/**
 * Title: Header
 * Slug: aisf/header
 * Description: Floating navigation with logo, links, language switch, and CTA.
 * Categories: aisf/header
 * Keywords: header, nav
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","right":"var:preset|spacing|4","left":"var:preset|spacing|4"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--4)">

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","right":"var:preset|spacing|5","left":"var:preset|spacing|5"}},"border":{"radius":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:site-logo {"width":40,"shouldSyncIcon":false} /-->

</div>
<!-- /wp:group -->

<!-- wp:navigation {"ref":0,"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|6"}}} -->
<!-- /wp:navigation -->

<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#join"><?php esc_html_e( 'Iscriviti', 'aisf' ); ?> →</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
