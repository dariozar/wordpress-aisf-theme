/**
 * Comitati: mappa interattiva + ricerca/filtri dell'elenco.
 * Markup generato da inc/committees.php (blocco aisf/committees-map).
 */
(function () {
	const map = document.querySelector('[data-committee-map]');
	if (!map) return;

	const caption = map.querySelector('[data-map-caption]');
	const cards = Array.from(document.querySelectorAll('[data-committee-card]'));
	const linkBase = map.getAttribute('data-link-base');
	const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	const dotOf = (id) => map.querySelector('[data-dot="' + id + '"]');
	const cardOf = (id) => document.getElementById(id);

	function paint(id) {
		map.querySelectorAll('[data-dot]').forEach((b) =>
			b.setAttribute('data-dot-active', String(b.getAttribute('data-dot') === id))
		);
		map.querySelectorAll('[data-cluster]').forEach((b) => {
			const ids = JSON.parse(b.getAttribute('data-cluster-ids') || '[]');
			b.setAttribute('data-cluster-active', String(ids.indexOf(id) !== -1));
		});
		cards.forEach((c) => c.classList.toggle('map-card-active', c.id === id));
	}

	function showClusterPanel(index) {
		map.querySelectorAll('[data-cluster-panel]').forEach((p) => {
			const show = p.getAttribute('data-cluster-panel') === String(index);
			p.toggleAttribute('hidden', !show);
		});
		map.querySelectorAll('[data-cluster]').forEach((b) =>
			b.setAttribute('aria-expanded', String(b.getAttribute('data-cluster') === String(index)))
		);
	}

	function captionFor(id) {
		const goto = map.querySelector('[data-goto="' + id + '"]');
		const dot = dotOf(id);
		const name =
			(goto && goto.textContent.trim()) || (dot && dot.getAttribute('title')) || id;
		if (caption) caption.textContent = name;
	}

	function select(id, opts) {
		const o = opts || {};
		const scroll = o.scroll !== false;
		const say = o.say !== false;
		paint(id);
		showClusterPanel(-1);
		if (say) captionFor(id);
		const card = cardOf(id);
		if (card) {
			// se il filtro/ricerca la nasconde, la si mostra di nuovo
			if (card.classList.contains('is-hidden')) resetFilters();
			if (card.tagName === 'DETAILS') card.open = true;
			if (scroll) card.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' });
		} else if (linkBase) {
			window.location.href = linkBase + '#' + id;
		}
	}

	map.querySelectorAll('[data-dot]').forEach((b) =>
		b.addEventListener('click', () => select(b.getAttribute('data-dot') || ''))
	);

	map.querySelectorAll('[data-cluster]').forEach((b) =>
		b.addEventListener('click', () => {
			const i = b.getAttribute('data-cluster') || '0';
			showClusterPanel(Number(i));
			map.querySelectorAll('[data-cluster]').forEach((o) =>
				o.setAttribute('data-cluster-active', String(o === b))
			);
			if (caption) {
				const names = Array.from(map.querySelectorAll('[data-cluster-panel="' + i + '"] [data-goto]')).map((g) =>
					g.textContent.trim()
				);
				caption.textContent = names.join(' · ');
			}
		})
	);

	map.querySelectorAll('[data-goto]').forEach((g) =>
		g.addEventListener('click', () => select(g.getAttribute('data-goto') || ''))
	);

	// Bottone "Mappa" nelle schede: torna al punto evidenziato.
	document.querySelectorAll('[data-locate]').forEach((b) =>
		b.addEventListener('click', () => {
			const id = b.getAttribute('data-locate') || '';
			paint(id);
			showClusterPanel(-1);
			captionFor(id);
			map.scrollIntoView({ behavior: reduceMotion ? 'auto' : 'smooth', block: 'center' });
		})
	);

	/* ----- Ricerca e filtri ----- */
	const q = document.getElementById('lc-search');
	const count = document.getElementById('lc-count');
	const empty = document.getElementById('lc-empty');
	const filters = Array.from(document.querySelectorAll('[data-lc-filter]'));
	let status = 'all';

	function paintFilter() {
		filters.forEach((b) => b.setAttribute('aria-pressed', String(b.getAttribute('data-lc-filter') === status)));
	}

	function apply() {
		const needle = q ? q.value.trim().toLowerCase() : '';
		let visible = 0;
		cards.forEach((c) => {
			const ok =
				(!needle || (c.getAttribute('data-search') || '').indexOf(needle) !== -1) &&
				(status === 'all' || c.getAttribute('data-status') === status);
			c.classList.toggle('is-hidden', !ok);
			if (ok) visible++;
		});
		if (count) count.textContent = visible + ' di ' + cards.length + ' comitati';
		if (empty) empty.classList.toggle('is-hidden', visible > 0);
	}

	function resetFilters() {
		status = 'all';
		if (q) q.value = '';
		paintFilter();
		apply();
	}

	if (q) q.addEventListener('input', apply);
	filters.forEach((b) =>
		b.addEventListener('click', () => {
			status = b.getAttribute('data-lc-filter') || 'all';
			paintFilter();
			apply();
		})
	);
	paintFilter();
	apply();

	/* ----- Link diretto: /comitati/#palermo apre e evidenzia la scheda ----- */
	if (cards.length > 0 && window.location.hash.length > 1) {
		const id = decodeURIComponent(window.location.hash.slice(1));
		if (cardOf(id)) {
			if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
			window.scrollTo(0, 0);
			select(id);
		}
	}

	/* ----- Scrollspy: punto e scheda restano sincronizzati mentre scorri ----- */
	if (cards.length > 0 && 'IntersectionObserver' in window) {
		const spy = new IntersectionObserver(
			(entries) => {
				const vis = entries
					.filter((e) => e.isIntersecting)
					.sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
				if (vis && vis.target.id) {
					paint(vis.target.id);
					showClusterPanel(-1);
				}
			},
			{ rootMargin: '-40% 0px -40% 0px' }
		);
		cards.forEach((c) => spy.observe(c));
	}
})();
