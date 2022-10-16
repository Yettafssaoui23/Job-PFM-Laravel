<!DOCTYPE html>
<html>

<head>
    <title>Add Map</title>

    <style type="text/css">
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru1 = {
                lat: 47.6193757,
                lng: 6.1529374
            };
            const uluru2 = {
                lat: 8.6193757,
                lng: 10.5593757
            };
            const uluru3 = {
                lat: 6.5590757,
                lng: 8.6193757
            };
            const uluru4 = {
                lat: 12.6165757,
                lng: 14.5590757
            };

            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru1,
            });

            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru1,
                uluru2,
                uluru3,
                uluru4,
                map: map,
            });
        }
    </script>
</head>

<body>

    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB92MsEGrb_mNUwfhzrQjVTvYs2o-P1v0A&callback=initMap&libraries=&v=weekly"
        async></script>
</body>

</html>
