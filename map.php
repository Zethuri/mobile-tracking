<!DOCTYPE html>
<html lang="en">
<head>
    <title>Live Location Tracking</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY"></script>
</head>
<body>

<div id="map" style="width: 100%; height: 500px;"></div>

<script>
let map, userMarker;
let contactMarkers = {};

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 0, lng: 0 },
        zoom: 15
    });

    getUserLocation();
    setInterval(getCloseContacts, 5000); // Fetch contacts every 5 sec
}

function getUserLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(position => {
            let userLocation = { lat: position.coords.latitude, lng: position.coords.longitude };

            if (!userMarker) {
                userMarker = new google.maps.Marker({
                    position: userLocation,
                    map: map,
                    title: "You",
                    icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                });
            } else {
                userMarker.setPosition(userLocation);
            }

            map.setCenter(userLocation);
        });
    }
}

function getCloseContacts() {
    fetch("get_contacts.php")
        .then(response => response.json())
        .then(contacts => {
            contacts.forEach(contact => {
                let contactLocation = { lat: parseFloat(contact.latitude), lng: parseFloat(contact.longitude) };

                if (!contactMarkers[contact.name]) {
                    contactMarkers[contact.name] = new google.maps.Marker({
                        position: contactLocation,
                        map: map,
                        title: contact.name,
                        icon: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                    });
                } else {
                    contactMarkers[contact.name].setPosition(contactLocation);
                }
            });
        })
        .catch(error => console.error("Error fetching contacts:", error));
}

window.onload = initMap;
</script>

</body>
</html>
