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
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|7","right":"var:preset|spacing|4","left":"var:preset|spacing|4"},"margin":{"top":"var:preset|spacing|9","bottom":"0"}},"border":{"radius":{"topLeft":"var:preset|border-radius|xl","topRight":"var:preset|border-radius|xl"}}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-paper-color has-ink-background-color has-text-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--xl);border-top-right-radius:var(--wp--preset--border-radius--xl);margin-top:var(--wp--preset--spacing--9);margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--4)">

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"36%"} -->
<div class="wp-block-column" style="flex-basis:36%">
<!-- wp:image {"width":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/aisf-logo.png" alt="AISF" style="width:56px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|text-on-dark-muted"}}}},"textColor":"text-on-dark-muted","fontSize":"small"} -->
<p class="has-text-on-dark-muted-color has-text-color has-link-color has-small-font-size">Rete di volontariato di studenti universitari di fisica negli atenei italiani. Indipendente, no-profit, fondata nel 2014.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.14em","fontSize":"11px"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Rete', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}},"className":"is-style-default"} -->
<ul style="padding-left:0" class="is-style-default">
<!-- wp:list-item -->
<li><a href="/" data-type="page" data-id="home"><?php esc_html_e( 'Chi siamo', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/esecutivo" data-type="page" data-id="esecutivo"><?php esc_html_e( 'Direttivo', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/comitati" data-type="page" data-id="comitati"><?php esc_html_e( 'Comitati', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/documenti" data-type="page" data-id="documenti"><?php esc_html_e( 'Bilancio', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.14em","fontSize":"11px"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Programmi', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}}} -->
<ul style="padding-left:0">
<!-- wp:list-item -->
<li><a href="/eventi" data-type="page" data-id="eventi"><?php esc_html_e( 'Congresso nazionale', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/eventi" data-type="page" data-id="eventi"><?php esc_html_e( 'Scuola invernale', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/#projects"><?php esc_html_e( 'Quaderno di Laboratorio', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="/#projects"><?php esc_html_e( 'Programma per le Scuole', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","textTransform":"uppercase","letterSpacing":"0.14em","fontSize":"11px"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Resta in contatto', 'aisf' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"style":{"spacing":{"padding":{"left":"0"}}}} -->
<ul style="padding-left:0">
<!-- wp:list-item -->
<li><a href="#join"><?php esc_html_e( 'Newsletter', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Mastodon', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'GitHub', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e( 'Contatti', 'aisf' ); ?></a></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
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
