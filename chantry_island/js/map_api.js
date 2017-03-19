(function() {
	var map = new google.maps.Map(document.querySelector('.map-wrapper'),{styles:[
    {
        featureType: "all",
        elementType: "geometry.fill",
        stylers: [{weight: "2.00"}]
    },
    {
        featureType: "all",
        elementType: "geometry.stroke",
        stylers: [{color: "#9c9c9c"}]
    },
    {
        featureType: "all",
        elementType: "labels.text",
        stylers: [{visibility: "on"}]
    },
    {
        featureType: "landscape",
        elementType: "all",
        stylers: [{color: "#f2f2f2"}]
    },
    {
        featureType: "landscape",
        elementType: "geometry.fill",
        stylers: [{color: "#ffffff"}]
    },
    {
        featureType: "landscape.man_made",
        elementType: "geometry.fill",
        stylers: [{color: "#fffaee"}]
    },
    {
        featureType: "poi",
        elementType: "all",
        stylers: [{visibility: "off"}]
    },
    {
        featureType: "road",
        elementType: "all",
        stylers: [{saturation: -100},{lightness: 45}]
    },
    {
        featureType: "road",
        elementType: "geometry.fill",
        stylers: [{color: "#eeeeee"}]
    },
    {
        featureType: "road",
        elementType: "labels.text.fill",
        stylers: [{color: "#7b7b7b"}]
    },
    {
        featureType: "road",
        elementType: "labels.text.stroke",
        stylers: [{color: "#ffffff"}]
    },
    {
        featureType: "road.highway",
        elementType: "all",
        stylers: [{visibility: "simplified"}]
    },
    {
        featureType: "road.arterial",
        elementType: "labels.icon",
        stylers: [{visibility: "off"}]
    },
    {
        featureType: "transit",
        elementType: "all",
        stylers: [{visibility: "off"}]
    },
    {
        featureType: "water",
        elementType: "all",
        stylers: [{color: "#46bcec"},{visibility: "on"}]
    },
    {
        featureType: "water",
        elementType: "geometry.fill",
        stylers: [{color: "#56849f"}]
    },
    {
        featureType: "water",
        elementType: "labels.text.fill",
        stylers: [{color: "#070707"}]
    },
    {
        featureType: "water",
        elementType: "labels.text.stroke",
        stylers: [{color: "#ffffff"}]
    }
]
      }), 
	preloader = document.querySelector('.preload-wrapper'),


	// import the geocode API
	geocoder = new google.maps.Geocoder(),
	geocodeButton = document.querySelector('.geocode'),

	// directions display
	directionsService = new google.maps.DirectionsService(),
	directionsDisplay,
	locations = [],

	marker;


	function initMap(position) {

		// save our location
		locations[0] = { lat: position.coords.latitude, lng: position.coords.longitude };


		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);



		map.setCenter({lat: position.coords.latitude, lng: position.coords.longitude});
		map.setZoom(6);

		
		var iconSVG = 'images/current_location_icon.svg';
		marker = new google.maps.Marker({
			position: {lat: position.coords.latitude, lng: position.coords.longitude}, 
			map: map, 
			animation: google.maps.Animation.DROP,
			icon: iconSVG,
			title: "Hello World"
		});
		
		var iconSVG2 = 'images/chantry_island_icon.svg';
		var marker2 = new google.maps.Marker({
	    position: {lat: 44.499983, lng: -81.373118},
	    map: map,
	    animation: google.maps.Animation.DROP,
	    icon: iconSVG2,
	    title: 'Chantry Island'
	  });

	
		var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Chantry Island</h1>'+
            '<div id="bodyContent">'+
            '<p>Chantry Island is a small, 81-hectare (200-acre) island in Lake Huron,' +
            ' south of the mouth of the Saugeen River and approximately a mile off the shores'+
            'of the town of Southampton, Ontario. The island is one the Canadian Wildlife Services'+
            ' migratory bird sanctuaries, designated in 1957, and home to gulls and great blue herons,'+
            ' as well as being an important migratory stop for birds traveling to northern nesting sites.'+
            'It is the location of one of the six Imperial Towers, early lighthouses built by the Canadian '+
            'government. The Chantry Light was built in 1859 and is still in use today. Tours to the lighthouse '+
            'have been a popular addition to the local tourist attractions. Both island and lighthouse are standard '+
            'inclusions in paintings and photographs of the sunsets off Southampton’s beaches.</p>'+
            '</div>'+
            '</div>';

        var youHere = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">You are Here</h1>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var infowindow2 = new google.maps.InfoWindow({
          content: youHere
        });

        var flightPlanCoordinates = [
          {lat: position.coords.latitude, lng: position.coords.longitude},
          {lat: 44.499983, lng: -81.373118}
        ];

        var flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: '#eed90e',
          strokeOpacity: 1.0,
          strokeWeight: 6
        });

        flightPath.setMap(map);

		marker.addListener('click', toggleBounce);
		//event listener for Chantry marker - clicks and zooms into it
		marker2.addListener('click', function() {
          map.setZoom(10);
          map.setCenter(marker2.getPosition());
          infowindow.open(map, marker2)
        });
        marker.addListener('mouseover', function() {
          infowindow2.open(map, marker)
        });

		preloader.classList.add("hide-preloader");

	}

		function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	} else {
		console.log("WE were on a break!");
	}

	function handleError(){
		console.log("something went wrong");
	}

 })();