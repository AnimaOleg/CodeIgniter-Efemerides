/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.navbar-default' ),
		img = document.querySelector( '.second-row' ),
		nav = document.querySelector( '.top-nav' ),
		user = document.querySelector( '.top-user' ),
		trig = document.querySelector( '.top-trig' ),
		
		didScroll = false,
		changeHeaderOn = 1;

	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 250 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header, 'navbar-shrink' );
			classie.add( img, 'hidden' );
			classie.add( nav, 'hidden' );
			classie.remove( user, 'hidden' );
			classie.remove( trig, 'hidden' );
		}
		else {
			classie.remove( header, 'navbar-shrink' );
			classie.remove( img, 'hidden' );
			classie.remove( nav, 'hidden' );
			classie.add( user, 'hidden' );
			classie.add( trig, 'hidden' );
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	init();

})();