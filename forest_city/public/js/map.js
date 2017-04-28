// Google Map API
function initMap() {
  var uluru = {lat: 42.9915941, lng: -81.2221732};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: {lat: 42.992, lng: -81.2215},
    mapTypeControlOptions: {
            mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                    'styled_map']
          }
  });
  
  var marker = new google.maps.Marker({
    position: {lat: 42.9915941, lng: -81.2221732},
    map: map,
	 animation: google.maps.Animation.DROP,
	 icon: map_dropper,
	 title: 'Forest City Cakes'
  });

  var styledMapType = new google.maps.StyledMapType(
            [
  {
    "featureType": "administrative",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#F99393"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#F99393"
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#F99393"
      },
      {
        "lightness": 85
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#F99393"
      },
      {
        "lightness": 35
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#F99393"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      },
      {
        "lightness": 65
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#3f3f3f"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a8d1d8"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a8d1d8"
      }
    ]
  }
],
            {name: 'Styled Map'});

  map.mapTypes.set('styled_map', styledMapType);
        map.setMapTypeId('styled_map');

}