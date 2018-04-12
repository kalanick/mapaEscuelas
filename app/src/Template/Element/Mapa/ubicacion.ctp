<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Ubicacion de la Escuela</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat:<?= $escuela->latitud ?>, lng: <?= $escuela->longitud ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6yOyJEdB8w1HYsYd2EomznimxUO2jbaE&callback=initMap">
    </script>
  </body>
</html>
