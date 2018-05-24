// Preloader
  	$(window).load(function() {
		$(".preLoad").animate({height: '0', opacity: '0'}, 1000);
	});


// Fade in intro text
$(document).ready(function () {
	$('.intro-text').fadeIn(1500);
	$('.line').fadeIn(1500);
});


// Navigation animation
var topbar = $('.top-bar');

$(document).ready(function(){
	$('.nav-icon').click(function(){
		$(this).toggleClass('open');
		if(topbar.attr('data-click-state') == 1) {
			topbar.attr('data-click-state', 0)
			topbar.css('display', 'none')
			topbar.animate({height: '0px', opacity: '0'});
			$('ul.dropdown.menu.main-menu li a.links, .trans-nav ul li form button.links, ul.social-media li a.links').css('display', 'none');
		} else {
			topbar.attr('data-click-state', 1)
			topbar.css('display', 'block')
			topbar.animate({height: '100vh', opacity: '1'}, "slow");
			setTimeout(function(){
		    	$('ul.dropdown.menu.main-menu li a.links, .trans-nav ul li form button.links, ul.social-media li a.links').each(function(i) {
		    		$(this).delay(200 * i).fadeIn(100);
		    	});
    		}, 500);
		}
	});
});


// Top bar closes when links are selected (mobile size)
if (window.matchMedia('(max-width: 640px)').matches) {
	$('.links').click(function(){
		topbar.css('display', 'none');
		$('.nav-icon').toggleClass('open');
			if(topbar.attr('data-click-state') == 1) {
				topbar.attr('data-click-state', 0)
				topbar.css('display', 'none')
				topbar.animate({height: '0px', opacity: '0'});
				$('ul.dropdown.menu.main-menu li a.links, .trans-nav ul li form button.links, ul.social-media li a.links').css('display', 'none');
		}
	});
}


// Menu visible tablet size and up
if (window.matchMedia('(min-width: 640px)').matches) {
	topbar.css('height', '70px')
	topbar.css('opacity', '1')
	$('ul.dropdown.menu.main-menu li a.links, .trans-nav ul li form button.links, ul.social-media li a.links').css('display', 'block');
}


// Parallax scrolling on background images
(function(){
  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.3;
  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){
      var windowYOffset = window.pageYOffset,
      elBackgrounPos = "50% " + (windowYOffset * speed) + "px";
      el.style.backgroundPosition = elBackgrounPos;
    });
  };
})();

$(document).ready(function(){
	var parallax = $('.parallax2');
	$(window).scroll(function () {
		var scroll = $(this).scrollTop()-1500;
		parallax.css({'background-position':'center calc(100% + '+(scroll * 0.2) + 'px)'});
	});
});

$(document).ready(function(){
	var parallax = $('.parallax3');
	$(window).scroll(function () {
		var scroll = $(this).scrollTop()-4500;
		parallax.css({'background-position':'center calc(50% + '+(scroll * 0.2) + 'px)'});
	});
});

if (window.matchMedia('(min-width: 640px)').matches) {
	$(document).ready(function(){
		var parallax = $('.parallax2');
		$(window).scroll(function () {
			var scroll = $(this).scrollTop()-1000;
			parallax.css({'background-position':'center calc(100% + '+(scroll * 0.2) + 'px)'});
		});
	});

	$(document).ready(function(){
		var parallax = $('.parallax3');
		$(window).scroll(function () {
			var scroll = $(this).scrollTop()-4000;
			parallax.css({'background-position':'center calc(50% + '+(scroll * 0.2) + 'px)'});
		});
	});
}

// Text in splash parallax effects
$(document).ready(function(){
		$(window).bind('scroll', function(e){
			parallaxScroll();
		});
		function parallaxScroll(){
			var margin = -21;
			var scrolled = $(window).scrollTop();
			$('.box').css('left', -(scrolled*0.1)+20+'%');
				if (window.matchMedia('(min-width: 640px)').matches) {
					var margin = -6;
					$('.box').css('left', -(scrolled*0.1)+30+'%');
					$('header .deco-text').css('left', (scrolled*0.1)+margin+'%');
				}
			$('.line').css('top', (scrolled*0.11)+62+'%');
			$('.intro-text').css('top', (scrolled*0.1)+50+'%');
			$('.intro-text').css('fontSize', (scrolled*0.015)+14+'px');
			$('header .deco-text').css('left', (scrolled*0.1)+margin+'%');
		}
	});


// Fade intro text and line on scroll
var fadeStart=1,
	fadeUntil=350,
	introText = $('.intro-text'),
	line = $('.line');

$(window).bind('scroll', function(){
   var offset = $(document).scrollTop(),
    		opacity=0;
    if( offset<=fadeStart ){
        opacity=1;
    }else if( offset<=fadeUntil ){
        opacity=1-offset/fadeUntil;
    }
    introText.css('opacity',opacity);
    line.css('opacity',opacity);
});


// Change sticky nav on scroll
var logo = document.querySelector(".logo-box");
var nav = document.querySelector(".trans-nav");
var screenPOS;

if (window.matchMedia('(min-width: 640px)').matches) {
	function changeNav() {
		screenPOS = window.scrollY;
	  	if(screenPOS>100) {
	  		scrollNav();
	  	}
	  }

	function unchangeNav() {
	  	screenPOS = window.scrollY;
	  	if(screenPOS<100) {
	  		unscrollNav();
	  	}
	}

	function scrollNav() {
	  	logo.classList.remove("logo-box");
	  	logo.classList.add("logo-box-scroll");
	  	nav.classList.remove("trans-nav");
	  	nav.classList.add("scroll-nav");
	  	TweenMax.to(nav, 0, {alpha:0, onComplete:changeOpacity});
	  	window.removeEventListener("scroll", changeNav, false);
	  	window.addEventListener("scroll", unchangeNav, false);
	}

	function unscrollNav() {
	  	window.addEventListener("scroll", changeNav, false);
	  	logo.classList.remove("logo-box-scroll");
	  	logo.classList.add("logo-box");
	  	nav.classList.remove("scroll-nav");
	  	nav.classList.add("trans-nav");
	  	TweenMax.to(nav, 0, {alpha:0, onComplete:changeOpacity});
	  	window.removeEventListener("scroll", unchangeNav, false);
	  	window.addEventListener("scroll", changeNav, false);
	}

	function changeOpacity() {
	  	TweenMax.to(nav, 1, {opacity:1});
	}

	window.addEventListener("scroll", changeNav, false);
	window.addEventListener("scroll", unchangeNav, false);
}


//draw svg titles
$(window).scroll(function() {
   var scrolltop = $(this).scrollTop(),
       	container1 = $('.services').offset().top,
   		container2 = $('.about').offset().top,
   		container3 = $('.portfolio').offset().top,
   		container4 = $('.contact').offset().top,
       	services = $('#services-title'),
       	about = $('#about-title'),
       	portfolio = $('#portfolio-title'),
       	contact = $('#contact-title');
	   if (scrolltop > (container1-250)) {
	   	services.css('opacity', '1')
	   	services.addClass('triggered1');
	   } 
	   if (scrolltop > (container2-250)) {
	   	about.css('opacity', '1')
	   	about.addClass('triggered2');
	   }
	   if (scrolltop > (container3-250)) {
	   	portfolio.css('opacity', '1')
	   	portfolio.addClass('triggered3');
	   }
	   if (scrolltop > (container4-250)) {
	   	contact.css('opacity', '1')
	   	contact.addClass('triggered4');
	   }
});


// Services slider
jQuery(document).ready(function ($) {
  
	var slideCount = $('#slider ul li').length;
	var slideWidth = $('#slider ul li').width();
	var slideHeight = $('#slider ul li').height();
	var sliderUlWidth = slideCount * slideWidth;
	
	$('#slider').css({ height: slideHeight });

	$('#slider ul').css({ height: slideHeight });

	$('#slider ul li').css({ height: slideHeight });
	
	// $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth, opacity: 0
        }, 500, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
            $('#slider ul').animate({opacity: '1'}, "slow");
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth, opacity: 0
        }, 500, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
            $('#slider ul').animate({opacity: '1'}, "slow");
        });
    };

    $('.control_prev').click(function () {
        moveLeft();
    });

    $('.control_next').click(function () {
        moveRight();
    });

  $('#slider ul').ready(function(){
    setInterval(function () {
        moveRight();
    }, 12000);
  });

});  


// Hover overlay on portfolio images
$('.thumbnails').mouseenter(function() {
  $(this).find('.overlay').animate({height: '100%', opacity: '1'}, 800);
});
$('.thumbnails').mouseleave(function() {
  $(this).find('.overlay').animate({height: '0', opacity: '0'}, 800);
});


// Scroll to show portfolio thumbnails
	var fade = document.querySelectorAll(".thumbnails");

	function checkScroll() {
		if (window.matchMedia("(min-width: 950px)").matches) {
			var screenPOS = window.scrollY;
			for(var i=0; i<fade.length; i++) {
			    if(screenPOS+600>=((fade[i].offsetTop)+(document.querySelector('.portfolio').offsetTop))) {
			    	TweenMax.to(fade[i], 0.5, {opacity:1, delay: (i/9)});
			    }
			}
		}else{
			TweenMax.to(fade, 0, {opacity:1});
		}		
	}

	window.addEventListener("scroll", checkScroll, false);


	// Skills list fades in one by one
	$(window).scroll(function() {
   var scrolltop = $(this).scrollTop(),
       	container2 = $('.skills-section').offset().top;
	   if (scrolltop > (container2-500)) {
	   	setTimeout(function(){
		    	$('.skills-section ul li').each(function(i) {
		    		$(this).delay(i * 300).animate({'opacity': 1}, 500);
		    	});
    		}, 500);
	   }
	});

	$(window).scroll(function() {
   var scrolltop = $(this).scrollTop(),
       	services = $('.services-info').offset().top,
       	scrolled = $(window).scrollTop(),
       	margin = -25;
	   if (scrolltop > (services-400)) {
		    	$('.services-info').css('left', (scrolled*0.05)+margin+'%');
	   }
	});

	$(window).scroll(function() {
   var scrolltop = $(this).scrollTop(),
       	contact = $('.contact').offset().top,
       	scrolled = $(window).scrollTop(),
       	margin = -90;
	   if (scrolltop > (contact-300)) {
		    	$('.contact .deco-text').css('left', (scrolled*0.02)+margin+'%');
	   }
	});


// Links
$(document).ready(function(){
	$("a#top").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $('header').offset().top-70
      }, 1000);
    });
  	$("a#services").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $('.services').offset().top-70
      }, 1000);
    });
  	$("a#about").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $('.about').offset().top-70
      }, 1000);
    });
  	$("a#portfolio").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $('.portfolio').offset().top-70
      }, 1000);
    });
  	$("a#contact").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $('.contact').offset().top-70
      }, 1000);
    });
});


// Pause playing videos when revealer is exited
$('.close-button').click(function(){
    $('video')[0].pause();
});