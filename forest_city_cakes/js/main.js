//change sticky nav on scroll

	var origNav = document.querySelector(".origNav");
	var scrollNav = document.querySelector(".scrollNav");
	var screenPOS;

	function changeNav() {
		screenPOS = window.scrollY;
	  	if(screenPOS>550) {
	  		// scrollNav();
	  		origNav.classList.add("hide");
	  		scrollNav.classList.remove("hide");
	  	}
	}

	function unchangeNav() {
	  	screenPOS = window.scrollY;
	  	if(screenPOS<550) {
	  		// unscrollNav();
	  		origNav.classList.remove("hide");
	  		scrollNav.classList.add("hide");
	  	}
	}

	// function scrollNav() {
	//   	origNav.classList.add("hide");
	//   	scrollNav.classList.remove("hide");
	//   	TweenMax.to(scrollNav, 0, {alpha:0, onComplete:changeOpacity});
	//   	window.removeEventListener("scroll", changeNav, false);
	//   	window.addEventListener("scroll", unchangeNav, false);
	// }

	// function unscrollNav() {
	//   	window.addEventListener("scroll", changeNav, false);
	//   	origNav.classList.remove("hide");
	//   	scrollNav.classList.add("hide");
	//   	TweenMax.to(origNav, 0, {alpha:0, onComplete:changeOpacity});
	//   	window.removeEventListener("scroll", unchangeNav, false);
	//   	window.addEventListener("scroll", changeNav, false);
	// }

	// function changeOpacity() {
	//   	TweenMax.to([origNav, scrollNav], 1, {opacity:1});
	//   	//console.log("changeOpacity");
	// }

	window.addEventListener("scroll", changeNav, false);
	window.addEventListener("scroll", unchangeNav, false);