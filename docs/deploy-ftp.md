# Deploy — Studio local → FTP server

## Layout rule

- Local dev lives in the Studio folder (SQLite, unversioned runtime).
- Versioned unit = this theme repo. Outer Studio root is never committed.
- Prototype (`prototype/project/`) stays the visual truth; tokens flow
  `styles.css :root` → `theme.json`, never the reverse.

## Artifact

Theme zip from repo root:

```bash
zip -r aisf-theme.zip . -x '.git/*' 'docs/*'
```

Upload + activate on the server. No build step (no bundler, vanilla
CSS/JS, Google Fonts via CDN).

## Database (server owns MySQL after deploy)

```bash
studio export aisf-db.sql --mode db   # MySQL-compatible dump
```

Import on the server, then search-replace the local URL with the live
domain. Local Studio keeps running on SQLite; never copy `DB_*`
constants back into `wp-config.php`.

## Media

Copy `wp-content/uploads/` once via FTP, then let the server own it.
Event/committee photos from the import doc go through the media
library so paths stay portable.

## Plugins (v1: none required)

- i18n (pass 2): Polylang — IT first, EN second.
- Nothing else. No page builder, no cache plugin, no ACF unless a
  field proves it needs one.

## CI sketch (GitHub Action)

1. Validate `theme.json` parses + required presets present.
2. `zip` the theme artifact.
3. Optional: boot Playground with the blueprint in
   `/tmp/opencode/aisf-blueprint.json`, curl the homepage, fail on
   non-200 or missing `wp-theme-aisf`.
4. FTP-upload the zip on tag (server activates manually).
