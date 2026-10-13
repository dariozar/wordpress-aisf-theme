<?php
/**
 * Title: front-page
 * Slug: aisf/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/group-photo.jpg","focalPoint":{"x":0.5,"y":0.35},"minHeight":720,"minHeightUnit":"px","gradient":"ink-hero","metadata":{"patternName":"aisf/hero-front","name":"Hero — Front Page","description":"Full-bleed hero with photo background, title, CTA buttons, and stats.","categories":["aisf/hero"]},"align":"full","className":"is-style-rounded-hero","style":{"spacing":{"padding":{"top":"120px","bottom":"112px","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"radius":{"bottomLeft":"var:preset|border-radius|xl","bottomRight":"var:preset|border-radius|xl"}}},"layout":{"type":"constrained","wideSize":"1200px"}} -->
<div class="wp-block-cover alignfull is-style-rounded-hero" style="border-bottom-left-radius:var(--wp--preset--border-radius--xl);border-bottom-right-radius:var(--wp--preset--border-radius--xl);padding-top:120px;padding-right:var(--wp--preset--spacing--5);padding-bottom:112px;padding-left:var(--wp--preset--spacing--5);min-height:720px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/group-photo.jpg" style="object-position:50% 35%" data-object-fit="cover" data-object-position="50% 35%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-ink-hero-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"constrained","wideSize":"780px"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(64px, 8.5vw, 128px)","lineHeight":"0.92","letterSpacing":"-0.035em"},"spacing":{"margin":{"top":"var:preset|spacing|7","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|paper"}}}},"textColor":"paper"} -->
<h1 class="wp-block-heading has-paper-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--7);margin-bottom:0;font-size:clamp(64px, 8.5vw, 128px);letter-spacing:-0.035em;line-height:0.92">Studenti<br><span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:400;color:var(--wp--preset--color--paper)">per</span> <span style="color:var(--wp--preset--color--tangerine)">studenti.</span></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"19px","lineHeight":"1.5"},"spacing":{"margin":{"top":"var:preset|spacing|6","bottom":"28px"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="margin-top:var(--wp--preset--spacing--6);margin-bottom:28px;font-size:19px;line-height:1.5">AISF è una comunità di studenti universitari di fisica che organizza conferenze, gruppi di studio e attività di divulgazione in quaranta atenei italiani. Siamo nati nel 2014 con tre sedi.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/iscriviti/">Unisciti ad AISF →</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|paper"},"border":{"color":"var:preset|color|paper"},":hover":{"color":{"background":"var:preset|color|text-muted"}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" href="/about/" style="border-color:var(--wp--preset--color--paper);color:var(--wp--preset--color--paper)">Cosa facciamo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="margin-bottom:0;font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1">40</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Comitati locali</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="margin-bottom:0;font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1">1.200</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Membri attivi</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"28px","letterSpacing":"-0.02em","lineHeight":"1"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"paper"} -->
<p class="has-paper-color has-text-color" style="margin-bottom:0;font-family:var(--wp--preset--font-family--display);font-size:28px;font-weight:600;letter-spacing:-0.02em;line-height:1">12</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Anni di attività</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"metadata":{"patternName":"aisf/quicklinks","name":"Quicklinks","description":"3-column quicklink cards (Tangerine, Mint, Blush dots).","categories":["aisf/sections"]},"className":"aisf-quicklinks","style":{"spacing":{"margin":{"top":"-48px"},"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"},"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|4"}}}} -->
<div class="wp-block-columns aisf-quicklinks" style="margin-top:-48px;padding-right:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:column {"className":"aisf-card"} -->
<div class="wp-block-column aisf-card"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|lift"},"backgroundColor":"paper","borderColor":"rule-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--lift)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"10px","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|1"}}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--1);font-size:10px;line-height:1">●</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|1"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--1);font-size:18px;font-weight:600;letter-spacing:-0.01em"><a href="/about/">Chi è AISF?</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:14px;line-height:1.5">Una rete volontaria che collega gli studenti di fisica delle università italiane.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"13px","fontWeight":"500"}}} -->
<p style="font-family:var(--wp--preset--font-family--display);font-size:13px;font-weight:500"><a href="/about/">Leggi di più →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"aisf-card"} -->
<div class="wp-block-column aisf-card"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|lift"},"backgroundColor":"paper","borderColor":"rule-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--lift)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"10px","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|1"}}},"textColor":"mint"} -->
<p class="has-mint-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--1);font-size:10px;line-height:1">●</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|1"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--1);font-size:18px;font-weight:600;letter-spacing:-0.01em"><a href="/progetti/">Cosa facciamo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:14px;line-height:1.5">Strumenti open-source, una rivista, divulgazione nelle scuole e un congresso annuale.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"13px","fontWeight":"500"}}} -->
<p style="font-family:var(--wp--preset--font-family--display);font-size:13px;font-weight:500"><a href="/progetti/">Vedi i progetti →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"aisf-card"} -->
<div class="wp-block-column aisf-card"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg","width":"1px"},"shadow":"var:preset|shadow|lift"},"backgroundColor":"paper","borderColor":"rule-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--lift)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"10px","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|1"}}},"textColor":"blush"} -->
<p class="has-blush-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--1);font-size:10px;line-height:1">●</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|1"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--1);font-size:18px;font-weight:600;letter-spacing:-0.01em"><a href="/iscriviti/">Come partecipare</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:14px;line-height:1.5">Unisciti al comitato locale, proponi un workshop, o avvia una nuova sede.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"13px","fontWeight":"500"}}} -->
<p style="font-family:var(--wp--preset--font-family--display);font-size:13px;font-weight:500"><a href="/iscriviti/">Partecipa →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"patternName":"aisf/about-row","name":"About Row","description":"2-column about section with Tangerine and Blush solid cards.","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:heading -->
<h2 class="wp-block-heading">Chi siamo, e<br>cosa facciamo davvero.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"tangerine","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tangerine-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"28px","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-size:28px;font-weight:600"><a href="/about/">Chi siamo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}}} -->
<p style="font-size:16px;line-height:1.55">Una rete volontaria di studenti universitari di fisica da quaranta atenei italiani. Indipendente, apartitica, finanziata dalle quote associative e da un piccolo contributo della Società Italiana di Fisica. Nessun docente nel direttivo — la rete è gestita da studenti per studenti, con un consiglio eletto ogni anno.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"14px","fontWeight":"500","textDecoration":"underline"}}} -->
<p style="font-family:var(--wp--preset--font-family--display);font-size:14px;font-weight:500;text-decoration:underline"><a href="/about/">Leggi di più →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|3"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"blush","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-blush-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"28px","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-size:28px;font-weight:600"><a href="/progetti/">Cosa facciamo</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}}} -->
<p style="font-size:16px;line-height:1.55">Pubblichiamo una rivista trimestrale, organizziamo il più grande congresso studentesco di fisica in Italia, facciamo divulgazione nelle scuole superiori e manteniamo un archivio pubblico di appunti, esercizi e tesi. Circa uno su tre dei nostri membri finisce per contribuire come organizzatore.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"14px","fontWeight":"500","textDecoration":"underline"}}} -->
<p style="font-family:var(--wp--preset--font-family--display);font-size:14px;font-weight:500;text-decoration:underline"><a href="/progetti/">I nostri progetti →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/events-section","name":"Events Section","description":"Dark panel with events grid (3 cards with sky gradient + tangerine date pills).","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"radius":"var:preset|border-radius|xl"}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-color has-ink-background-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">I nostri eventi,<br>in giro per l'Italia.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px","lineHeight":"1.5"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:15px;line-height:1.5">Sei eventi principali all'anno, oltre agli incontri mensili in ogni sede. Quasi tutti aperti anche ai non soci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-warm"} -->
<div class="wp-block-button is-style-warm"><a class="wp-block-button__link wp-element-button" href="/eventi/">Tutti gli eventi →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"aisf_event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"paper","textColor":"ink","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-ink-color has-paper-background-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_date"}}}},"className":"is-style-tag-tangerine","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"11px","right":"11px"},"margin":{"bottom":"var:preset|spacing|1"}},"border":{"radius":"999px"}},"backgroundColor":"tangerine","textColor":"ink"} -->
<p class="is-style-tag-tangerine has-ink-color has-tangerine-background-color has-text-color has-background" style="border-radius:999px;margin-bottom:var(--wp--preset--spacing--1);padding-top:5px;padding-right:11px;padding-bottom:5px;padding-left:11px;font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase"></p>
<!-- /wp:paragraph -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"24px","lineHeight":"1.1","letterSpacing":"-0.015em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-excerpt {"style":{"typography":{"fontSize":"14px","lineHeight":"1.5"}}} /-->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}},"backgroundColor":"ink"} -->
<hr class="wp-block-separator has-text-color has-ink-color has-alpha-channel-opacity has-ink-background-color has-background" style="margin-top:var(--wp--preset--spacing--4);margin-bottom:var(--wp--preset--spacing--4)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.08em;text-transform:uppercase"><!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_type"}}}}} -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"core/post-meta","args":{"key":"_event_location"}}}}} -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/projects-row","name":"Projects Row","description":"2-column projects section with solid Tangerine and Mint cards.","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:heading -->
<h2 class="wp-block-heading">Coltiviamo progetti,<br>non solo eventi.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"tangerine","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tangerine-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"className":"is-style-tag-dark","style":{"typography":{"letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
<p class="is-style-tag-dark" style="margin-bottom:var(--wp--preset--spacing--4);letter-spacing:0.1em">Open source · dal 2019</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"28px","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-size:28px;font-weight:600"><a href="/progetti/">Quaderno di Laboratorio Aperto</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}}} -->
<p style="font-size:16px;line-height:1.55">Una libreria condivisa e revisionata di esperimenti universitari — protocolli, dati grezzi e codice. Usato in 18 atenei per i corsi di laboratorio del primo e secondo anno. Curato da una redazione di nove studenti a rotazione.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"14px","fontWeight":"500","textDecoration":"underline"},"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--display);font-size:14px;font-weight:500;text-decoration:underline"><a href="/progetti/">Sfoglia il quaderno →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|7","right":"var:preset|spacing|7"},"blockGap":"var:preset|spacing|4"},"border":{"radius":"var:preset|border-radius|lg"}},"backgroundColor":"mint","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-mint-background-color has-background" style="border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--7)"><!-- wp:paragraph {"className":"is-style-tag-dark","style":{"typography":{"letterSpacing":"0.1em"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
<p class="is-style-tag-dark" style="margin-bottom:var(--wp--preset--spacing--4);letter-spacing:0.1em">Divulgazione · dal 2021</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"28px","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-size:28px;font-weight:600"><a href="/progetti/">Programma per le Scuole</a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}}} -->
<p style="font-size:16px;line-height:1.55">I nostri membri visitano le scuole superiori per laboratori pratici di fisica — magnetismo, ottica, pensiero computazionale. 240 scuole raggiunte finora.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"14px","fontWeight":"500","textDecoration":"underline"},"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
<p style="margin-top:var(--wp--preset--spacing--6);font-family:var(--wp--preset--font-family--display);font-size:14px;font-weight:500;text-decoration:underline"><a href="/iscriviti/">Diventa volontario →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/chapters-section","name":"Chapters Section","description":"Map + chapter list 2-column layout.","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">Una rete,<br>in tutta Italia.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","lineHeight":"1.55"}},"textColor":"text-muted"} -->
<p class="has-text-muted-color has-text-color" style="font-size:18px;line-height:1.55">Ogni comitato locale è gestito da un piccolo direttivo studentesco in un ateneo. Trova il tuo — se non c'è ancora, puoi avviarlo tu.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|6"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--6)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/comitati/">Trova il tuo comitato</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="mailto:esecutivo@ai-sf.it">Avvia un nuovo comitato →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:aisf/committees-list /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"var:preset|border-radius|lg","width":"1px","style":"dashed"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"backgroundColor":"paper-2","borderColor":"rule-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-rule-light-border-color has-paper-2-background-color has-background" style="border-style:dashed;border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:aisf/committees-dots /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/articles-section","name":"Articles Section","description":"3-column articles/journal grid.","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Dalla rivista<br>studentesca.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="/articoli/">Tutti gli articoli →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"excludeCurrent":null},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"aisf-card","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|lg","width":"1px"}},"backgroundColor":"paper","borderColor":"rule-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-card has-border-color has-rule-light-border-color has-paper-background-color has-background" style="border-width:1px;border-radius:var(--wp--preset--border-radius--lg);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"aspectRatio":"16/10","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"18px","lineHeight":"1.3","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"text-muted"} -->
<div class="wp-block-group has-text-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.1em;text-transform:uppercase"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/stats-section","name":"Stats Section","description":"Dark stats panel with large tangerine numbers.","categories":["aisf/sections"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|9"},"border":{"radius":"var:preset|border-radius|xl"}},"backgroundColor":"ink","textColor":"paper","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-paper-color has-ink-background-color has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|9","left":"var:preset|spacing|9"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|2"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--2)">Dodici anni.<br>Quaranta città.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.55"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-size:16px;line-height:1.55">La rete è cresciuta lentamente, di proposito. Ogni comitato è stato fondato da studenti — mai dall'alto.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--7)"><!-- wp:button {"className":"is-style-warm"} -->
<div class="wp-block-button is-style-warm"><a class="wp-block-button__link wp-element-button" href="/documenti/">Bilancio annuale →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|7","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(40px, 6vw, 64px)","lineHeight":"1","letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--display);font-size:clamp(40px, 6vw, 64px);font-weight:600;letter-spacing:-0.03em;line-height:1">1.200+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Membri attivi</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(40px, 6vw, 64px)","lineHeight":"1","letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--display);font-size:clamp(40px, 6vw, 64px);font-weight:600;letter-spacing:-0.03em;line-height:1">40</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Comitati locali</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(40px, 6vw, 64px)","lineHeight":"1","letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--display);font-size:clamp(40px, 6vw, 64px);font-weight:600;letter-spacing:-0.03em;line-height:1">2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Fondazione</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontWeight":"600","fontSize":"clamp(40px, 6vw, 64px)","lineHeight":"1","letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"textColor":"tangerine"} -->
<p class="has-tangerine-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--3);font-family:var(--wp--preset--font-family--display);font-size:clamp(40px, 6vw, 64px);font-weight:600;letter-spacing:-0.03em;line-height:1">240</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"11px","letterSpacing":"0.12em","textTransform":"uppercase"}},"textColor":"text-on-dark-muted"} -->
<p class="has-text-on-dark-muted-color has-text-color" style="font-family:var(--wp--preset--font-family--mono);font-size:11px;letter-spacing:0.12em;text-transform:uppercase">Scuole raggiunte</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"aisf/join-cta","name":"Join CTA","description":"Blush gradient call-to-action section.","categories":["aisf/cta"]},"className":"aisf-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group aisf-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"border":{"radius":"var:preset|border-radius|xl"}},"textColor":"ink","gradient":"blush-join","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-ink-color has-blush-join-gradient-background has-text-color has-background" style="border-radius:var(--wp--preset--border-radius--xl);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--4)"><!-- wp:heading {"style":{"typography":{"fontSize":"clamp(36px, 4vw, 56px)","lineHeight":"1.0","letterSpacing":"-0.02em","textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(36px, 4vw, 56px);letter-spacing:-0.02em;line-height:1.0">Fai parte della<br><span style="font-family:var(--wp--preset--font-family--serif);font-style:italic;font-weight:400">comunità AISF</span>.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px","lineHeight":"1.55","textAlign":"center"},"spacing":{"padding":{"right":"var:preset|spacing|11","left":"var:preset|spacing|11"}}},"textColor":"text-muted"} -->
<p class="has-text-align-center has-text-muted-color has-text-color" style="padding-right:var(--wp--preset--spacing--11);padding-left:var(--wp--preset--spacing--11);font-size:17px;line-height:1.55">La quota annuale è di 5 € per studenti liceali, triennali e magistrali. Se il tuo ateneo non ha ancora un comitato locale, ti aiutiamo ad avviarne uno.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|7"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--7)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/iscriviti/">Diventa socio →</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="mailto:esecutivo@ai-sf.it">Avvia un comitato</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->