(function(){
  "use strict";
  //console.log("SEAF Fired");

  	var mainImg = document.querySelector("#mainWatch");
  	var colour1 = document.querySelector("#colour1");
  	var colour2 = document.querySelector("#colour2");
  	var colour3 = document.querySelector("#colour3");
  	var colour4 = document.querySelector("#colour4");
  	var colour5 = document.querySelector("#colour5");
  	var buttons = document.querySelectorAll(".colour");

	function changePic1() {
		mainImg.src="images/"+"watch.png";
	}

	function changePic2() {
		mainImg.src="images/"+"watch"+"_02.png";
	}

	function changePic3() {
		mainImg.src="images/"+"watch"+"_03.png";
	}

	function changePic4() {
		mainImg.src="images/"+"watch"+"_04.png";
	}

	function changePic5() {
		mainImg.src="images/"+"watch"+"_05.png";
	}

	function reveal() {;
		//console.log('reveal working')
		TweenMax.to(mainImg, 0, {autoAlpha:0, onComplete:changeOpacity, ease:Power0.easeNone, y:0});
	}

	function changeOpacity() {
		TweenMax.to(mainImg, 1.5, {autoAlpha:1, ease:Power0.easeNone, y:0});
	}

	for(var i=0; i<buttons.length; i++) {
		buttons[i].addEventListener("click", reveal, false);
	}	

	colour1.addEventListener("click", changePic1, false);
	colour2.addEventListener("click", changePic2, false);
	colour3.addEventListener("click", changePic3, false);
	colour4.addEventListener("click", changePic4, false);
	colour5.addEventListener("click", changePic5, false);

})();