<?php
/**
 * Title: Hero — Front Page
 * Slug: aisf/hero-front
 * Description: Full-bleed hero with photo background, title, CTA buttons, and stats.
 * Categories: aisf/hero
 * Keywords: hero, cover, homepage
 * Viewport Width: 1500
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/group-photo.jpg","dimRatio":70,"overlayColor":"ink","focalPoint":{"x":0.5,"y":0.35},"minHeight":100,"align":"full","className":"is-style-rounded-hero","style":{"spacing":{"padding":{"top":"120px","bottom":"112px","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-cover alignfull is-style-rounded-hero" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);min-height:100vh;padding-top:120px;padding-right:var(--wp--preset--spacing--5);padding-bottom:112px;padding-left:var(--wp--preset--spacing--5)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"className":"is-style-tag-dark","style":{"typography":{"letterSpacing":"0.12em"}}} -->
<p class="is-style-tag-dark" style="letter-spacing:0.12em">Una rete di 1.200 studenti di fisica</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(64px, 8.5vw, 128px)","lineHeight":"0.92","letterSpacing":"-0.035em"},"spacing":{"margin":{"top":"var:preset|spacing|7","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|paper"}}}},"textColor":"paper"} -->
<h1 class="wp-block-heading has-paper-color has-text-color" style="font-size:clamp(64px, 8.5vw, 128px);letter-spacing:-0.035em;line-height:0.92;margin-top:var(--wp--preset--spacing--7);margin-bottom:0">Studenti<br/><span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:400;color:var(--wp--preset--color--paper)">per</span> <span style="color:var(--wp--preset--color--tangerine)">studenti.</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"19px","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|6","bottom":"28px"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:19px;line-height:1.5;margin-top:var(--wp--preset--spacing--6);margin-bottom:28px">AISF &egrave; una comunit&agrave; di studenti universitari di fisica che organizza conferenze, gruppi di studio e attivit&agrave; di divulgazione in quaranta atenei italiani. Siamo nati nel 2014 con tre sedi.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#join">Unisciti ad AISF &rarr;</a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|paper"},"border":{"color":"var:preset|color|paper"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#about" style="border-color:var(--wp--preset--color--paper);color:var(--wp--preset--color--paper)">Cosa facciamo</a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:separator {"backgroundColor":"rule","className":"is-style-dark","style":{"spacing":{"margin":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|6"}}}} -->
<hr class="wp-block-separator has-text-color has-rule-color has-alpha-channel-opacity has-rule-background-color has-background is-style-dark" style="margin-top:var(--wp--preset--spacing--8);margin-bottom:var(--wp--preset--spacing--6)"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1;margin-bottom:0">40</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Comitati locali</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1;margin-bottom:0">1.200</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Membri attivi</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1;margin-bottom:0">12</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Anni di attivit&agrave;</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->
