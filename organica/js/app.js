$(document).foundation();

(function() {
	"use strict";
	var width = window.innerWidth;
	var height = window.innerHeight;

	function resizeOrbit() {
		if(window.innerWidth !== width && window.innerHeight !== height) {
			window.location.href = window.location.href;
		}
	}



	window.addEventListener('resize', resizeOrbit, false);
})();