<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Location</title>
</head>
<body>
    <header>
        <?php include '../../Templates/Header.php';?>
    </header>

    <navbar>
        <?php include '../../Templates/NavBar.php'; ?>
    </navbar>

    <div id="map" style="height: 400px;"></div>

    <script>
        function initMap() {
            var restaurantLocation = { lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: restaurantLocation
            });

            var marker = new google.maps.Marker({
                position: restaurantLocation,
                map: map,
                title: 'Restaurant Location'
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

    <div>
        <h2>Restaurant Address</h2>
        <p>бул. „Тодор Александров“ 20, 1303 Pette Kyosheta, София</p>
    </div>
</body>
</html>
