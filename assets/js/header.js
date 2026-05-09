(function () {
	const nav = document.querySelector('.aisf-nav');
	if (!nav) return;

	function onScroll() {
		nav.classList.toggle('is-floating', window.scrollY > 24);
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	const darkSelectors = '.wp-block-cover, .has-ink-background-color, footer.wp-block-template-part, footer';
	let overDark = false;

	function checkOverDark() {
		const navRect = nav.getBoundingClientRect();
		const navCenterY = navRect.top + navRect.height / 2;

		let found = false;
		for (const el of document.querySelectorAll(darkSelectors)) {
			const r = el.getBoundingClientRect();
			if (r.height > 0 && navCenterY >= r.top && navCenterY <= r.bottom) {
				found = true;
				break;
			}
		}
		if (found !== overDark) {
			overDark = found;
			nav.classList.toggle('over-dark', overDark);
		}
	}

	window.addEventListener('scroll', checkOverDark, { passive: true });
	window.addEventListener('resize', checkOverDark);
	checkOverDark();
})();
