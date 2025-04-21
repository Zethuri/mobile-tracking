<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Live Location Map</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 100vh;
      width: 100%;
    }
  </style>
</head>
<body>

  <div id="map"></div>

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    const map = L.map('map').setView([0, 0], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    let userMarker;

    function updateUserLocation(position) {
      const { latitude, longitude } = position.coords;

      if (userMarker) {
        userMarker.setLatLng([latitude, longitude]);
      } else {
        userMarker = L.marker([latitude, longitude])
          .addTo(map)
          .bindPopup('You are here')
          .openPopup();
      }

      map.setView([latitude, longitude], 15);
    }

    function showError(error) {
      alert('Error getting location: ' + error.message);
    }

    navigator.geolocation.watchPosition(updateUserLocation, showError, {
  enableHighAccuracy: true,  // ✅ use GPS if available
  maximumAge: 0,             // don't use cached location
  timeout: 10000             // wait max 10 seconds
});

  </script>
</body>
</html>
