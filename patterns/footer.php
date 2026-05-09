<?php
/**
 * Title: Footer
 * Slug: aisf/footer
 * Description: Dark 4-column footer with network links.
 * Categories: aisf/footer
 * Keywords: footer
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"32px","right":"var:preset|spacing|4","left":"var:preset|spacing|4"},"margin":{"top":"var:preset|spacing|9","bottom":"0"}},"border":{"radius":{"topLeft":"var:preset|border-radius|xl","topRight":"var:preset|border-radius|xl"}}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--xl);border-top-right-radius:var(--wp--preset--border-radius--xl);margin-top:var(--wp--preset--spacing--9);margin-bottom:0;padding-top:64px;padding-right:var(--wp--preset--spacing--4);padding-bottom:32px;padding-left:var(--wp--preset--spacing--4)">

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"37.5%"} -->
<div class="wp-block-column" style="flex-basis:37.5%">
<!-- wp:image {"width":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/aisf-logo.png" alt="AISF" style="width:56px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:14px;line-height:1.55">Rete di volontariato di studenti universitari di fisica negli atenei italiani. Indipendente, no-profit, fondata nel 2014.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"20.8%"} -->
<div class="wp-block-column" style="flex-basis:20.8%">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;font-weight:500;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Rete', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3)"><a href="/">Chi siamo</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="/esecutivo">Direttivo</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="/comitati">Comitati</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:0"><a href="/documenti">Bilancio</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"20.8%"} -->
<div class="wp-block-column" style="flex-basis:20.8%">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;font-weight:500;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Programmi', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3)"><a href="/eventi">Congresso nazionale</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="/eventi">Scuola invernale</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="/#projects">Quaderno di Laboratorio</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:0"><a href="/#projects">Programma per le Scuole</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"20.8%"} -->
<div class="wp-block-column" style="flex-basis:20.8%">

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","fontWeight":"500","letterSpacing":"0.14em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;font-weight:500;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Resta in contatto', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--3)"><a href="#join">Newsletter</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="#">Mastodon</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|3"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:var(--wp--preset--spacing--3)"><a href="#">GitHub</a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.45"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="font-size:14px;line-height:1.45;margin-top:0;margin-bottom:0"><a href="#">Contatti</a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"rule","className":"is-style-dark"} -->
<hr class="wp-block-separator has-text-color has-rule-color has-alpha-channel-opacity has-rule-background-color has-background is-style-dark"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|6"}},"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<div class="wp-block-group alignwide has-text-on-dark-muted-color has-text-color" style="padding-top:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase">
<!-- wp:paragraph -->
<p>&copy; 2026 AISF &middot; Bologna, IT</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>v1.0</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
