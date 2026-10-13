# Content import — old Jekyll site → AISF theme CPTs

Source clone (local, throwaway): `/tmp/opencode/ai-sf-github`
(`https://github.com/ai-sf/ai-sf.github.io`, Jekyll: `_config.yml`, `_data/`, `_events/`, `img/`)

## Decision

Keep all 4 CPTs for v1 — patterns already query them
(`template-events`, `template-committees`, `template-documents`,
`template-executive`). Deleting them would mean rewriting working
templates for no gain (ponytail: reuse wins).

## Source → CPT map

| File | Count | CPT | Meta keys |
|------|-------|-----|-----------|
| `_events/*.md` frontmatter (`title`, `startingdate`, `endingdate`, `place`, `cover`, `categories`) | 54 | `aisf_event` (`/eventi/`) | `_event_date`, `_event_location`, `_event_type`, `_event_status` |
| `_data/LC.yml` (`nome`, `presidente`, `fondazione`, `mail`, `logo`, `regolamento`, `fb`) | ~19 active | `aisf_committee` (`/comitati/`) | `_committee_president`, `_committee_established`, `_committee_email`, `_committee_region`, `_committee_status` |
| `_data/EC.yml` current `membri` (`nome`, `ruolo`, `descr`, `mail`, `img`) | 8 | `aisf_executive` (no archive) | `_executive_role`, `_executive_mandate`, `_executive_email` |
| `_data/verbali.yml` + `_data/documenti.yml` (`data`, `link`, Drive URLs) | yearly | `aisf_document` (no archive) | `_document_type`, `_document_url`, `_document_date`, `_document_year` |

Images: `_source/img/esecutivo/*` → media library, attach as
thumbnails. Event covers in `img/photos/` + `img/locandine/` → media
library. Prototype already bundles stand-ins in
`prototype/project/img/` and `assets/`.

## How to import (pick one)

1. **WP Admin** — `/wp-admin/edit.php?post_type=aisf_event` (needs Studio CLI).
2. **Studio CLI** — `studio wp post create … --post_type=aisf_event`
   then `studio wp post meta set <id> _event_date '…'`.
3. **SQLite directly** (local Studio only) — see `HANDOFF.md` snippet.
4. **REST** — `POST /wp-json/wp/v2/aisf_event` (meta exposed via
   `show_in_rest`).

Import historic 54 events as `past` status; committees only the
19 active ones (2 frozen stay out). Verbali keep Drive links as-is.
