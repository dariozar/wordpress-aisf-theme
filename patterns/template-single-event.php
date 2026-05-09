<?php
/**
 * Title: Template — Single Event
 * Slug: aisf/template-single-event
 * Template Types: single-aisf_event
 * Description: Single event with hero image, sidebar, and content.
 * Categories: aisf/pages
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/group-photo.jpg","dimRatio":70,"overlayColor":"ink","minHeight":60,"align":"full","style":{"spacing":{"padding":{"top":"180px","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:60vh;padding-top:180px;padding-bottom:var(--wp--preset--spacing--10)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase"><a href="/eventi">Eventi</a> / <!-- wp:post-meta {"key":"_event_type"} /--></p>
<!-- /wp:paragraph -->
<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(32px, 6vw, 72px)","lineHeight":"1","letterSpacing":"-0.03em"}}} /-->
</div></div>
<!-- /wp:cover -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|10"},"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--9);padding-bottom:var(--wp--preset--spacing--10)">

<!-- wp:column {"width":"66%"} -->
<div class="wp-block-column" style="flex-basis:66%">
<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%"} -->
<div class="wp-block-column" style="flex-basis:33%">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|card"},"borderColor":"rule-light","backgroundColor":"paper"} -->
<div class="wp-block-group has-paper-background-color has-background has-border-color has-rule-light-border-color" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--card)">

<!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<h4 class="wp-block-heading has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Dettagli</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"}}} -->
<p style="font-size:14px;line-height:1.45"><strong>Data:</strong> <!-- wp:post-meta {"key":"_event_date"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"}}} -->
<p style="font-size:14px;line-height:1.45"><strong>Sede:</strong> <!-- wp:post-meta {"key":"_event_location"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"}}} -->
<p style="font-size:14px;line-height:1.45"><strong>Scadenza iscrizioni:</strong> <!-- wp:post-meta {"key":"_registration_deadline"} /--></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"backgroundColor":"rule-light"} -->
<hr class="wp-block-separator has-text-color has-rule-light-color has-alpha-channel-opacity has-rule-light-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-warm"} -->
<div class="wp-block-button is-style-warm"><a class="wp-block-button__link wp-element-button" href="#">Iscriviti &rarr;</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
