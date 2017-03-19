(function(){

	var valRequest, ajaxRequest;
	var contact = document.querySelector("#contact form");
	var error = document.querySelector("#contact p");
	var success = document.querySelector("#success");

	var map, dealerMarker = [];
	var infowindow = [];
	var dealerMap = document.querySelector('#dealers');
	var markerImage = baseURL + "images/pointer.svg";

	if(success){
		contact.scrollIntoView(true);
		window.scrollTo(0, window.pageYOffset - 120);
	}

	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(displayLocation, showFail);
	}else{
		alert("Device does not support geolocation");
	}

	function showFail() {
		dealerMap.innerHTML = "<p class='text-center'>The Dealers Map Failed to Load Your Position.</p>";
	}

	function displayLocation(position){
		var latitude = position.coords.latitude;
		var longitude = position.coords.longitude;
		showMap(position.coords);
	}

	function showMap(coords){
		var latlng = new google.maps.LatLng(coords.latitude, coords.longitude);

		var mapOptions = {
			zoom: 12,
			center: latlng,
			scrollwheel: false,
			streetViewControl: false,
			mapTypeControl : false
		};

		var styles = [
		{
			stylers: [
				{ saturation: -100 }
			]
		}];

		getDealers();

		map = new google.maps.Map(dealerMap,mapOptions);
		map.setOptions({styles: styles});
	}

	function getDealers() {
		ajaxRequest = createRequest();

		if(ajaxRequest === null){
			alert("Please upgrade to a modern browser");
			return;
		}

		var url = baseURL + "admin/findDealers";
		ajaxRequest.onreadystatechange = dealersList;
		ajaxRequest.open("GET",url,true);
		ajaxRequest.send(null);
	}

	function dealersList() {
		if(ajaxRequest.readyState === 4 || ajaxRequest.readyState === "complete"){
			var dealers = JSON.parse(ajaxRequest.responseText);
			for (i = 0; i < dealers.length; i++){

				dealerMarker[i] = new google.maps.Marker({
					position: new google.maps.LatLng(dealers[i].dealers_lat, dealers[i].dealers_lng),
					map: map,
					icon: new google.maps.MarkerImage(markerImage,
					null, null, null, new google.maps.Size(55,87)),
					animation: google.maps.Animation.DROP,
					title: dealers[i].dealers_name,
					id: i
				});

				dealerMarker[i].setMap(map);

				infowindow[i] = new google.maps.InfoWindow();
				google.maps.event.addListener(dealerMarker[i], 'click', function(){
					infowindow[this.id].setContent(this.title);
				    infowindow[this.id].open(map, this);
				});
			}
			
		}
	}

	function formVal(contactForm) {
		valRequest = createRequest();

		if(valRequest === null){
			alert("Please upgrade to a modern browser");
			return;
		}
		
		var name = contactForm.elements.name.value;
		var email = contactForm.elements.email.value;
		var subject = contactForm.elements.subject.value;
		var message = contactForm.elements.message.value;

		if(name && email && subject && message){
			var url = baseURL + "contact/send";
			valRequest.onreadystatechange = formSubmitted;
			valRequest.open("GET",url,true);
			valRequest.send(null);
		}else{
			error.innerHTML = "Please fill out all fields.";
		}
	}

	function formSubmitted() {
		if(valRequest.readyState === 4 || valRequest.readyState === "complete"){
			contact.submit();
		}
	}

	contact.addEventListener("submit", function(e) {
		e.preventDefault();
		formVal(this);
	}, false);

})();