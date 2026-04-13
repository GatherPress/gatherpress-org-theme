/**
 * Smart sticky header — scrolls away naturally, slides back
 * fixed at the top when the user scrolls up or stops scrolling.
 */
( () => {
	const innerHeader = document.querySelector( '.gatherpress-sticky-header' );

	if ( ! innerHeader ) {
		return;
	}

	// Target the <header> template part wrapper.
	const header =
		innerHeader.closest( 'header.wp-block-template-part' ) ||
		innerHeader;

	const siteBlocks = document.querySelector( '.wp-site-blocks' );
	const headerHeight = header.offsetHeight;

	let lastScrollY = window.scrollY;
	let ticking = false;
	let idleTimer = null;
	let isFixed = false;

	const setFixed = ( fixed ) => {
		if ( fixed === isFixed ) {
			return;
		}
		isFixed = fixed;

		if ( fixed ) {
			siteBlocks.style.paddingTop = headerHeight + 'px';
			header.classList.add( 'gatherpress-sticky-header--fixed' );
		} else {
			header.classList.remove( 'gatherpress-sticky-header--fixed' );
			header.classList.remove( 'gatherpress-sticky-header--hidden' );
			siteBlocks.style.paddingTop = '';
		}
	};

	const onScroll = () => {
		const currentScrollY = window.scrollY;
		const scrollingUp = currentScrollY < lastScrollY;
		const pastHeader = currentScrollY > headerHeight;

		// Clear any pending idle reveal.
		clearTimeout( idleTimer );

		if ( ! pastHeader ) {
			// Back near the top — return to normal document flow.
			setFixed( false );
		} else if ( scrollingUp ) {
			// Scrolling up — reveal the header.
			setFixed( true );
			header.classList.remove( 'gatherpress-sticky-header--hidden' );
		} else {
			// Scrolling down — hide if already fixed.
			if ( isFixed ) {
				header.classList.add( 'gatherpress-sticky-header--hidden' );
			}

			// Reveal after scrolling stops.
			idleTimer = setTimeout( () => {
				setFixed( true );
				header.classList.remove(
					'gatherpress-sticky-header--hidden'
				);
			}, 800 );
		}

		lastScrollY = currentScrollY;
		ticking = false;
	};

	window.addEventListener( 'scroll', () => {
		if ( ! ticking ) {
			window.requestAnimationFrame( onScroll );
			ticking = true;
		}
	} );
} )();
