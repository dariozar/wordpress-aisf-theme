<?php
/**
 * Title: header
 * Slug: aisf/header
 * Inserter: no
 */
?>
<?php
$aisf_logo_src = get_template_directory_uri() . '/assets/images/aisf-logo.png';
if ( function_exists( 'get_theme_mod' ) ) {
    $aisf_custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $aisf_custom_logo_id ) {
        $aisf_custom_src = wp_get_attachment_image_url( $aisf_custom_logo_id, 'full' );
        if ( $aisf_custom_src ) {
            $aisf_logo_src = $aisf_custom_src;
        }
    }
}
?>
<!-- wp:group {"metadata":{"patternName":"aisf/header","name":"Header","description":"Navigation — transparent at top, becomes floating glass on scroll, dark variant over dark sections.","categories":["aisf/header"]},"align":"full","className":"aisf-nav","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull aisf-nav" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","className":"aisf-nav-inner","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","right":"clamp(16px, 4vw, 32px)","left":"clamp(16px, 4vw, 32px)"},"blockGap":"clamp(12px, 2.5vw, 24px)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide aisf-nav-inner" style="padding-top:var(--wp--preset--spacing--5);padding-right:clamp(16px, 4vw, 32px);padding-bottom:var(--wp--preset--spacing--5);padding-left:clamp(16px, 4vw, 32px)"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom","className":"aisf-nav-logo is-style-rounded","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
<figure class="wp-block-image size-full has-custom-border aisf-nav-logo is-style-rounded"><a href="/"><img src="<?php echo esc_url( $aisf_logo_src ); ?>" alt="AISF" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)"/></a></figure>
<!-- /wp:image -->

<!-- wp:navigation {"style":{"spacing":{"blockGap":"clamp(20px, 2.6vw, 36px)"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<!-- wp:navigation-submenu {"label":"Chi siamo","type":"custom","url":"/about/","kind":"custom"} -->
<!-- wp:navigation-link {"label":"L'Associazione","type":"custom","url":"/about/","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Comitato Esecutivo","type":"custom","url":"/esecutivo/","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Working Groups","type":"custom","url":"/working-groups/","kind":"custom"} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Eventi","type":"custom","url":"/eventi/","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Progetti","type":"custom","url":"/progetti/","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Comitati","type":"custom","url":"/comitati/","kind":"custom"} /-->

<!-- wp:navigation-link {"label":"Documenti","type":"custom","url":"/documenti/","kind":"custom"} /-->
<!-- /wp:navigation -->

<!-- wp:group {"className":"aisf-nav-cta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group aisf-nav-cta"><!-- wp:paragraph {"className":"aisf-lang-switch","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"14px","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"text-muted"} -->
<p class="aisf-lang-switch has-text-muted-color has-text-color" style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--mono);font-size:14px;letter-spacing:0.1em;text-transform:uppercase"><strong>IT</strong> · EN</p>
<!-- /wp:paragraph -->

<!-- wp:button {"style":{"typography":{"fontSize":"16px","fontWeight":"600"},"spacing":{"padding":{"top":"0.85em","bottom":"0.85em","left":"1.5em","right":"1.5em"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="/iscriviti/" style="padding-top:0.85em;padding-right:1.5em;padding-bottom:0.85em;padding-left:1.5em;font-size:16px;font-weight:600">Iscriviti →</a></div>
<!-- /wp:button --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->