var map;
var markers = [];
var marker = false;

function getLocation() {
    navigator.geolocation.getCurrentPosition(showPosition);
}

function showPosition(position) {
    var lati = position.coords.latitude;
    var long = position.coords.longitude;
    initMap(lati, long);
}

function initMap(lati, long) {

    var centerOfMap = new google.maps.LatLng(lati, long);

    var options = {
        center: { lat: lati, lng: long },
        zoom: 10
    };
    map = new google.maps.Map(document.getElementById('map'), options);
    var coords = { lat: lati, lng: long };
    document.getElementById('lat').value = lati;
    document.getElementById('lng').value = long;
    addMaker(coords)

    function addMaker(coords) {
        if (marker === false) {
            marker = new google.maps.Marker({
                position: coords,
                map: map,
                animation: google.maps.Animation.DROP,
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function(event) {
                markerLocation();
            });
        } else {
            marker.setPosition(clickedLocation);
        }
        markers.push(marker);
    }

    // Sets the map on all markers in the array.
    function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(map);
        }
    }

    function clearMarkers() {
        setMapOnAll(null);
    }

    function deleteMarkers() {
        clearMarkers();
        markers = [];
    }

    google.maps.event.addListener(map, 'click', function(event) {
        var clickedLocation = event.latLng;
        if (marker === false) {
            deleteMarkers();
            marker = new google.maps.Marker({
                position: clickedLocation,
                map: map,
                draggable: true
            });
            google.maps.event.addListener(marker, 'dragend', function(event) {
                markerLocation();
            });
        } else {
            marker.setPosition(clickedLocation);
        }
        markerLocation();
    });
}

function markerLocation() {
    var currentLocation = marker.getPosition();
    document.getElementById('lat').value = currentLocation.lat();
    document.getElementById('lng').value = currentLocation.lng();
}

// google.maps.event.addDomListener(window, 'load', initMap);