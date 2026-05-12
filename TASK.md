# TASKS — Iteration 2

## Phase 1: theme.json
- [x] Remove broken fontFace[].src URLs from all 3 font families
- [x] Set contentSize to 1200px (matching prototype --max)

## Phase 2: functions.php
- [x] Add `wp_enqueue_style()` for Google Fonts (Space Grotesk + Newsreader + JetBrains Mono)
- [x] Register 5 `core/paragraph` block styles: `tag`, `tag-tangerine`, `tag-mint`, `tag-blush`, `tag-dark`

## Phase 3: style.css
- [x] Add `body { margin: 0 }` explicitly
- [x] Add header sticky/glass CSS rules
- [x] Add footer link hover tangerine rule
- [x] Add card hover lift rule
- [x] Remove unused utility classes

## Phase 4: assets/styles/
- [x] Create `core-paragraph.css` with pill styles for all 5 variants
- [x] Create `core-group.css` with glass, glass-dark, and card style variations
- [x] Clean `core-button.css` — only button variant styles (removed leaked card/cover/group styles)
- [x] Create `core-cover.css` — rounded-hero style
- [x] Verify `core-navigation.css` custom styles

## Phase 5: Rewrite patterns
- [x] header.php — sticky nav + image logo + 5 nav links + IT/EN + CTA, now uses is-style-glass
- [x] footer.php — paragraph links, correct column widths, spacing, hover
- [x] hero-front.php — correct cover dimRatio, button styles, tag pill
- [x] quicklinks.php — paper background cards, shadow:lift, dot indicators
- [x] about-row.php — solid tangerine/blush colors (not gradients)
- [x] projects-row.php — solid colors, ink meta pills
- [x] events-section.php — match prototype card structure, tangerine date pills
- [x] chapters-section.php — map + city list layout
- [x] articles-section.php — paper cards with rule-light border
- [x] stats-section.php — large tangerine numbers, column layout
- [x] join-cta.php — blush gradient, centered, italic span
- [x] page-hero.php — simplified eyebrow + heading structure

## Phase 6: Glassmorphism as reusable block style
- [x] Register `glass` and `glass-dark` block styles for `core/group` in functions.php
- [x] Create `assets/styles/core-group.css` with `.is-style-glass` (paper semi-transparent) and `.is-style-glass-dark` (ink semi-transparent)
- [x] Replace hardcoded `aisf-nav-glass` in header.php with `is-style-glass`
- [x] Remove nav-specific glass CSS from style.css (now in core-group.css block style)
- [x] Clean `core-button.css` — split leaked group/card/cover styles into their own files
- [x] Create `core-cover.css` for rounded-hero style

## Phase 7: Header v3 — match prototype exactly
- [x] Create `assets/js/header.js` — scroll listener + dark section detection
- [x] Enqueue header.js in functions.php
- [x] Rewrite header.php — transparent, 6 links, clamp logo, proper padding
- [x] Update style.css — .aisf-nav states + transitions
- [x] Rewrite core-navigation.css — link styles, over-dark, @media 1100px/720px
- [x] Remove nav hover underline from theme.json

## Phase 8: Design system audit — typography, buttons, tags, cards, spacing
- [x] Fix font sizes: small=15px flat, base=16px flat, medium=22px flat, large=28-40px, x-large=36-56px
- [x] Fix body line-height: 1.55 → 1.5
- [x] Fix button padding: 0.75em/1.5em → 12px/22px
- [x] Fix button font-size: 15px (not fluid small)
- [x] Fix sky-card gradient: 155deg, 50% stop (was 160deg, 60%)
- [x] core-button.css: add hover translateY(-1px) with transitions
- [x] core-paragraph.css: fix dark tag bg → rgba(247,242,236,0.08) (was solid ink)
- [x] style.css: add .aisf-section @media ≤900px: 80px→40px top/bottom padding
- [x] style.css: add card paragraph default text-muted color for is-style-paper/dark/aisf-card
- [x] Add aisf-section class to all 7 section wrapper patterns
