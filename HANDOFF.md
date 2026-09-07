# AISF Block Theme — Handoff Document

## Overview

Complete block-based WordPress theme built for the AI-sf.it website. Recreates the HTML/CSS prototype 1:1 using modern Full Site Editing patterns. Minimal CSS, maximum delegation to `theme.json` and core blocks.

**Active theme**: `aisf`  
**Location**: `wp-content/themes/aisf/`  
**Site**: Managed via WordPress Studio (SQLite backend)

---

## File Tree (48 files)

```
wp-content/themes/aisf/
├── style.css                         # Theme header + CSS reset + aurora gradient
├── theme.json                        # All design tokens (v3, wp 6.9+)
├── functions.php                     # CPTs, meta fields, block styles, pattern categories
├── templates/
│   ├── front-page.html               # Full homepage (reference: pattern chain)
│   ├── index.html                    # Blog index
│   ├── page.html                     # Generic page
│   ├── page-no-title.html            # Page without hero
│   ├── page-documenti.html           # Documents page
│   ├── page-esecutivo.html           # Executive board page
│   ├── archive.html                  # Default blog archive
│   ├── archive-aisf_event.html       # Events archive
│   ├── archive-aisf_committee.html   # Committees archive
│   ├── single.html                   # Single post
│   ├── single-aisf_event.html        # Single event
│   ├── search.html                   # Search results
│   └── 404.html                      # 404 page
├── parts/
│   ├── header.html                   # → aisf/header pattern
│   └── footer.html                   # → aisf/footer pattern
├── patterns/
│   ├── header.php                    # Floating nav: logo + navigation + CTA
│   ├── footer.php                    # 4-column dark footer
│   ├── hero-front.php                # Full-bleed cover hero (photo + title + stats)
│   ├── quicklinks.php                # 3-card strip (Tangerine/Mint/Blush)
│   ├── about-row.php                 # 2-col cards (Tangerine/Blush gradients)
│   ├── events-section.php            # Dark panel + events query grid
│   ├── projects-row.php              # 2-col projects (Tangerine/Mint cards)
│   ├── chapters-section.php          # Map + chapter list
│   ├── articles-section.php          # Article cards grid (query loop)
│   ├── stats-section.php             # Dark numbers panel
│   ├── join-cta.php                  # Blush gradient CTA
│   ├── page-hero.php                 # Generic dark page hero
│   ├── template-page.php             # Page wrapper (hero + content)
│   ├── template-page-no-title.php    # Page wrapper (no hero)
│   ├── template-index.php            # Blog index wrapper
│   ├── template-archive.php          # Archive wrapper
│   ├── template-single.php           # Single post wrapper
│   ├── template-search.php           # Search wrapper
│   ├── template-events.php           # Events archive wrapper
│   ├── template-single-event.php     # Single event wrapper (hero + sidebar)
│   ├── template-committees.php       # Committees archive wrapper
│   ├── template-documents.php        # Documents page wrapper
│   ├── template-executive.php        # Executive page wrapper
│   └── template-404.php              # 404 page wrapper
└── assets/
    ├── aisf-logo.png                 # 233KB — brand logo
    ├── group-photo.jpg               # 10MB — hero/event photos
    ├── italy-map.svg                 # 88KB — map outline
    └── styles/
        ├── core-button.css           # Pill styles: secondary, warm, ghost, outline
        └── core-navigation.css       # Nav color, dropdown, mobile styles
```

---

## Design System — theme.json Tokens

### Colors (17)
| Slug | Value | Role |
|------|-------|------|
| `paper` | `#F7F2EC` | Warm off-white background |
| `paper-2` | `#EFE7DC` | Slightly darker paper |
| `ink` | `#0E1830` | Deep navy — primary text/bg |
| `ink-2` | `#1A2748` | Lifted navy (cards on dark) |
| `ink-3` | `#243358` | Hover navy |
| `tangerine` | `#F08A1E` | Primary accent |
| `tangerine-deep` | `#D9750A` | Tangerine hover |
| `mint` | `#7FD8B0` | CTA / go |
| `mint-deep` | `#4FB890` | Mint hover |
| `blush` | `#F4B8C2` | Soft accent |
| `blush-deep` | `#E090A0` | Blush hover |
| `sky` | `#B8D4F0` | Gradient blue |
| `rule` | `#1F2C4D` | Divider on dark |
| `rule-light` | `#E2D8C8` | Divider on paper |
| `text-muted` | `#5A6580` | Muted body text |
| `text-dim` | `#8A92A8` | Dim text |
| `text-on-dark-muted` | `#A8B2CC` | Muted text on dark bg |

### Gradients (4)
- `sky-card`: `linear-gradient(160deg, #DCE9F7, #B8D4F0, #94B8DA)`
- `ink-hero`: `linear-gradient(180deg, rgba(14,24,48,0.55)...)` — photo overlay
- `blush-join`: `linear-gradient(160deg, #F4D8DE, #F4B8C2, #E8A0AE)` — CTA section
- `tangerine-cta`: `linear-gradient(160deg, #F08A1E, #F5A040)` — card accent

### Typography
| Font Family | Use | Loading |
|-------------|-----|---------|
| Space Grotesk (400-700) | Display, body, UI | Google Fonts (swap) |
| Newsreader (400 italic) | Serif moments, quotes | Google Fonts |
| JetBrains Mono | Mono data, meta, tags | Google Fonts |

Font sizes: 7 fluid sizes from `x-small` (12px) to `xx-large` (80px). Headings: h1 at x-large (56px), h2 at large (28px), h3 at medium (22px).

### Spacing Scale (11 sizes, 4px base)
`1`=4px, `2`=8px, `3`=12px, `4`=16px, `5`=20px, `6`=24px, `7`=32px, `8`=40px, `9`=56px, `10`=80px, `11`=112px

### Border Radii
`sm`=10px, `md`=16px, `lg`=22px, `xl`=28px, `pill`=999px

### Shadows
`card`: subtle elevation, `lift`: strong elevation for hover, `dark`: deep shadow for dark overlays

---

## Custom Post Types

| CPT | Slug | Archive | Supports | Key Meta Fields |
|-----|------|---------|----------|-----------------|
| Event | `aisf_event` | `/eventi/` | title, editor, thumbnail, custom-fields | `_event_date`, `_event_location`, `_event_type`, `_event_status`, `_registration_deadline` |
| Committee | `aisf_committee` | `/comitati/` | title, custom-fields | `_committee_president`, `_committee_established`, `_committee_email`, `_committee_status`, `_committee_region` |
| Executive | `aisf_executive` | none | title, editor, thumbnail, custom-fields | `_executive_role`, `_executive_mandate`, `_executive_email` |
| Document | `aisf_document` | none | title, custom-fields | `_document_type`, `_document_url`, `_document_date`, `_document_year` |

All meta fields registered via `register_post_meta()` with `show_in_rest: true` for block access.

---

## Block Style Variations (registered in functions.php)

| Block | Style | Visual |
|-------|-------|--------|
| `core/button` | `secondary` | Transparent, ink border → ink bg on hover |
| `core/button` | `warm` | Tangerine bg → tangerine-deep on hover |
| `core/button` | `ghost` | Transparent, muted text |
| `core/button` | `outline` | Transparent, rule-light border |
| `core/group` | `card-tangerine` | Tangerine bg card |
| `core/group` | `card-mint` | Mint bg card |
| `core/group` | `card-blush` | Blush bg card |
| `core/group` | `card-sky` | Sky gradient card |
| `core/group` | `paper` | Paper bg + rule-light border |
| `core/group` | `dark` | Ink-2 bg card |
| `core/cover` | `rounded-hero` | Bottom radius xl |

---

## Page ↔ Template Mapping

| Page Slug | Template | Pattern |
|-----------|----------|---------|
| `/` (front page) | `front-page.html` | Chain of 8 section patterns |
| `/home` | `front-page.html` | Same |
| `/*` (any page) | `page.html` | `aisf/template-page` |
| `/eventi/` | `archive-aisf_event.html` | `aisf/template-events` |
| `/eventi/*` (single) | `single-aisf_event.html` | `aisf/template-single-event` |
| `/comitati/` | `archive-aisf_committee.html` | `aisf/template-committees` |
| `/documenti` | `page-documenti.html` | `aisf/template-documents` |
| `/esecutivo` | `page-esecutivo.html` | `aisf/template-executive` |
| Blog posts | `archive.html` / `single.html` | `aisf/template-archive` / `aisf/template-single` |

---

## How to Add Content

Since the database starts empty, populate CPTs through one of:

1. **WP Admin UI** — When the `studio` CLI is working: visit `/wp-admin/edit.php?post_type=aisf_event`
2. **Python/SQLite** — Insert directly:
   ```python
   import sqlite3
   conn = sqlite3.connect('wp-content/database/.ht.sqlite')
   c = conn.cursor()
   # Insert an event
   c.execute("INSERT INTO wp_posts (post_title, post_type, post_status, post_name) VALUES ('CISF 2026', 'aisf_event', 'publish', 'cisf-2026')")
   post_id = c.lastrowid
   c.execute("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES (?, '_event_date', '13—17 apr 2026')", (post_id,))
   c.execute("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES (?, '_event_location', 'Roma')", (post_id,))
   c.execute("INSERT INTO wp_postmeta (post_id, meta_key, meta_value) VALUES (?, '_event_type', 'Conferenza')", (post_id,))
   conn.commit()
   ```
3. **REST API** — `POST /wp-json/wp/v2/aisf_event` with meta fields

---

## Key Technical Decisions

- **No custom media queries** — All responsiveness via WordPress core block breakpoints (navigation at 600px, columns at 782px). Fluid typography handles scaling.
- **Minimal style.css** — ~100 lines. Design system lives in `theme.json`. Block-specific CSS in `assets/styles/`.
- **Patterns as template wrappers** — Templates are 1-line HTML files referencing a pattern. Patterns contain the block markup (allows translation, easier editing).
- **Static front page** — Page ID 2 ("Home") set as front page. `front-page.html` template applied to it.
- **Aurora background** — 5 radial gradients on `body` with `background-attachment: fixed`, matching the prototype exactly.

---

## Known Gaps / Next Steps

- **Screenshot.png** — Missing. Generate a 1200×900 screenshot of the front page.
- **Real member photos** — Placeholder `group-photo.jpg` used for event heroes. Add actual photos to `assets/`.
- **City dots on map** — CSS-only city markers not implemented. The Italy map SVG renders without interactive dots. Add as CSS overlay or inline SVG.
- **Language switch** — IT/EN toggle from prototype not implemented. Add via Polylang plugin or custom navigation.
- **Past events section** — The events page has an "upcoming" section; a "past events" section with different card styles should be added when events archive has enough entries.
- **Search** — Search template exists but no search form is placed in the header.
- **`studio` CLI** — Not available in the current environment. When available, use `studio wp theme activate aisf` and `studio site start` to serve the site.
