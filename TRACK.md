# Iteration 1 — Initial scaffold

**Commit**: `351e641` Initial theme scaffold
**Date**: 2026-05-09

Created 48 files:
- `theme.json` with design tokens (17 colors, 3 fonts, 7 sizes, 11 spacings, 5 radii, 3 shadows)
- `style.css` with reset + aurora background
- `functions.php` with 4 CPTs + meta + block styles + pattern categories
- 13 templates, 2 parts, 24 patterns
- 5 assets (logo, group photo, map, 2 block CSS files)

Known issues:
- Fonts not loading (fontFace src uses URLs, not file paths)
- Header not sticky/no glass effect
- Footer list rendering fragile
- Pills use inline styles instead of block style classes
- Cards use wrong backgrounds (gradients vs solids)
- contentSize: 740px too narrow for prototype layout

---

# Iteration 2 — Fix fonts, header, footer, pills, layout, cards

**Commit**: _(pending)_
**Date**: 2026-05-09

### theme.json
- Removed broken `fontFace[].src` URLs from all font families
- Set `contentSize` from 740px → 1200px

### functions.php
- Added `wp_enqueue_style('aisf-fonts')` for Google Fonts (Space Grotesk + Newsreader + JetBrains Mono), enqueued for both frontend and editor
- Registered 5 `core/paragraph` block styles: `tag`, `tag-tangerine`, `tag-mint`, `tag-blush`, `tag-dark`

### style.css
- Added explicit `html, body { margin: 0; padding: 0 }`
- Added sticky header rule: `header.wp-block-template-part { position: sticky; top: 0; z-index: 100 }`
- Added glass nav class `.aisf-nav-glass` with backdrop-filter + semi-transparent bg
- Added footer link hover tangerine rule
- Added card hover lift rule `.aisf-card { transition ... } &:hover { translateY(-3px) }`
- Removed unused classes (aisf-hero-credit, aisf-mandate-body, is-aisf-nav-sticky)

### assets/styles/
- Created `core-paragraph.css` with pill styles for all 5 tag variants (mono font, 11px, radius 999px, uppercase, proper bg/text colors)

### patterns/header.php — full rewrite
- Sticky outer group with `aisf-nav-glass` class + border-radius 16px
- Logo: `wp:image` with link to `/` (not site-logo)
- Navigation: 5 `wp:navigation-link` items (Chi siamo, Eventi, Progetti, Comitati, Documenti)
- Language switch: IT · EN in mono 11px
- CTA: "Iscriviti →" pill button

### patterns/footer.php — full rewrite
- Column widths: 37.5% / 20.8% / 20.8% / 20.8%
- Links as `wp:paragraph` with `<a>` tags (not wp:list-item)
- Headers: mono 11px, weight 500, letter-spacing 0.14em, uppercase
- Links: 14px, paper color, spacing 20px header→links + 12px between links
- Separator + bottom bar with copyright

### patterns/hero-front.php — updated
- Cover dimRatio 70, photo focalPoint y:0.35
- Tag pill for network label (is-style-tag-dark)
- Proper heading structure with serif italic span
- Correct button styles (outline with paper border)
- Stats row with display font numbers + mono labels

### patterns/quicklinks.php — updated
- Paper bg cards (not colored)
- Shadow:lift on cards
- Colored dot indicators (●) in tangerine/mint/blush
- Card hover class

### patterns/about-row.php — fixed
- Solid tangerine/blush backgrounds (not gradients)
- Tag pill for eyebrow label

### patterns/projects-row.php — fixed
- Solid tangerine/mint backgrounds
- Ink meta pills (is-style-tag-dark)
- Proper "more" link styling

### patterns/events-section.php — fixed
- Sky gradient cards (gradient:sky-card)
- Tangerine date pills (is-style-tag-tangerine)
- Mono meta row with type + location
- Tag pill for eyebrow on dark bg

### patterns/chapters-section.php — updated
- Tag pill for eyebrow
- Map image with dashed border, paper-2 bg

### patterns/articles-section.php — updated
- Paper cards with rule-light border, aisf-card hover class
- Tag pill for eyebrow
- Mono date with letter-spacing

### patterns/stats-section.php — updated
- Large tangerine numbers with proper spacing
- Tag pill (dark) for eyebrow
- Better column ratio

### patterns/join-cta.php — updated
- Tag pill for eyebrow
- Centered layout with italic serif span in heading

### patterns/page-hero.php — simplified
- Removed duplicate eyebrow (post-title is the title)
- Clean dark bg hero with xl bottom radii
