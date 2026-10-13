(function () {
	const nav = document.querySelector('.aisf-nav');
	if (!nav) return;

	const navInner = nav.querySelector('.aisf-nav-inner') || nav;
	const submenus = nav.querySelectorAll('.wp-block-navigation__submenu-container');

	function onScroll() {
		nav.classList.toggle('is-floating', window.scrollY > 24);
		syncSubmenuGlass();
	}

	const darkSelectors = '.wp-block-cover, .has-ink-background-color, footer.wp-block-template-part, footer';
	let overDark = false;

	function isPointOverDark(y) {
		for (const el of document.querySelectorAll(darkSelectors)) {
			const r = el.getBoundingClientRect();
			if (r.height > 0 && y >= r.top && y <= r.bottom) {
				return true;
			}
		}
		return false;
	}

	function checkOverDark() {
		const navRect = nav.getBoundingClientRect();
		const navCenterY = navRect.top + navRect.height / 2;

		const found = isPointOverDark(navCenterY);
		if (found !== overDark) {
			overDark = found;
			nav.classList.toggle('over-dark', overDark);
		}
		syncSubmenuGlass();
	}

	function syncSubmenuGlass() {
		if (!submenus.length) return;

		const innerStyle = window.getComputedStyle(navInner);
		const topNavLink = nav.querySelector('.wp-block-navigation > .wp-block-navigation-item > .wp-block-navigation-item__content');
		const linkStyle = topNavLink ? window.getComputedStyle(topNavLink) : null;

		const isFloating = nav.classList.contains('is-floating');
		const isDark = nav.classList.contains('over-dark');

		submenus.forEach((sub) => {
			sub.classList.toggle('is-floating', isFloating);
			sub.classList.toggle('over-dark', isDark);

			if (linkStyle) {
				sub.style.fontFamily = linkStyle.fontFamily;
				sub.style.fontSize = linkStyle.fontSize;
				sub.style.fontWeight = linkStyle.fontWeight;
				sub.style.letterSpacing = linkStyle.letterSpacing;
			}

			if (isFloating && innerStyle.backgroundColor && innerStyle.backgroundColor !== 'rgba(0, 0, 0, 0)') {
				sub.style.backgroundColor = innerStyle.backgroundColor;
				sub.style.backdropFilter = innerStyle.backdropFilter || 'blur(18px) saturate(160%)';
				sub.style.webkitBackdropFilter = innerStyle.webkitBackdropFilter || innerStyle.backdropFilter || 'blur(18px) saturate(160%)';
			} else {
				sub.style.removeProperty('background-color');
				sub.style.removeProperty('backdrop-filter');
				sub.style.removeProperty('-webkit-backdrop-filter');
			}
		});
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('scroll', checkOverDark, { passive: true });
	window.addEventListener('resize', checkOverDark);

	nav.querySelectorAll('.wp-block-navigation-submenu').forEach((item) => {
		item.addEventListener('mouseenter', () => {
			checkOverDark();
			syncSubmenuGlass();
		});
	});

	onScroll();
	checkOverDark();
})();
