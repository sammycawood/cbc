<?php
$properties = [];
array_push($properties, array("name" => "First Property", "address" => "123 Main St", "available" => true));
array_push($properties, array("name" => "Second Property", "address" => "456 Niam Ave", "available" => false));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page_title = 'Properties & Rentals';
    include_once('head.php');
    ?>
    <script src="js/properties-rentals.js"></script>
</head>
<body>
<div class="view properties-rentals">
    <?php include_once("nav.php"); ?>
    <div class="main">
        <h2 class="title">Properties &amp; Rentals</h2>

        <!-- Google Map -->
        <div id="map"></div>

        <div class="flexWrap">
            <?php
            $html = "";
            foreach ($properties as $prop) {
                $html .= "<div class='property'>";
                $html .= "<h3>$prop[name]</h3>";
                $html .= "<p class='largeText'>$prop[address]</p>";
                if ($prop['available']) {
                    $html .= "<div class='available avail'><p>Available</p></div>";
                } else {
                    $html .= "<div class='unavailable avail'><p>Unavailable</p></div>";
                }
                $html .= "</div>";
            }
            echo $html;
            ?>
        </div>
    </div>

    <?php include_once("footer.php"); ?>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOQWRmraySijvonMfmqNSX6AyRh3w3ykU&callback=initMap" async defer></script>
<script>
// Google maps API
var map;
var geocoder;
var infowindow;
var markers = [];
var properties = [
    {name: 'Property 1', address: '925 Virginia Ave, East Lansing, MI'},
    {name: 'Property 2', address: '2511 Raby Rd, East Lansing, MI'}
];
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 42.735864, lng: -84.4856267},
        zoom: 13
    });

    // Adds markers to map
    drop();
}
function drop() {
    clearMarkers();
    for (var i = 0; i < properties.length; i++) {
        addMarkerWithTimeout(properties[i], i * 200 + 1000, i);
    }
}
function addMarkerWithTimeout(property, timeout, index) {
    window.setTimeout(function() {
        var letter = String.fromCharCode("A".charCodeAt(0) + index),

        geocoder = new google.maps.Geocoder;
        infowindow = new google.maps.InfoWindow;

        geocoder.geocode({'address': property['address']}, function(results, status) {
            if (status === 'OK') {
                marker = new google.maps.Marker({
                    map: this.map,
                    position: results[0].geometry.location,
                    title: property['name'],
                    icon: "http://maps.google.com/mapfiles/marker" + letter + ".png",
                    animation: google.maps.Animation.DROP
                });
                markers[index] = marker;

                //Add listener
                google.maps.event.addListener(marker, "click", function(event) {
                    infowindow.setContent('<h3>'+property['name']+'</h3>'+property['address']);
                    infowindow.open(map, markers[index]);
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }, timeout);
}
function clearMarkers() {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(null);
    }
    markers = [];
}
</script>
</body>
</html>
