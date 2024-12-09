<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Google w PHP</title>
    <style>
        /* Ustaw wysokość mapy */
        #map {
            height: 500px; 
            width: 100%; 
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=TWÓJ_KLUCZ_API"></script>
    <script>
        function initMap() {
            // Ustawienia mapy
            var lokalizacja = {lat: 52.2297, lng: 21.0122}; // Przykładowa lokalizacja (Warszawa)
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: lokalizacja
            });
            var marker = new google.maps.Marker({
                position: lokalizacja,
                map: map
            });
        }
    </script>
</head>
<body onload="initMap()">
    <h1>Moja Mapa Google</h1>
    <div id="map"></div>
</body>
</html>
