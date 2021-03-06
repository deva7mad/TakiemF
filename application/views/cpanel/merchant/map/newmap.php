<html>
<head>
    <title>Leaflet geolocate example</title>
     <meta http-equiv=�Content-Security-Policy� content=�default-src �self� gap://ready file://* *; style-src �self� �unsafe-inline�; script-src �self� �unsafe-inline� �unsafe-eval��/>
    <link rel="stylesheet" href="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css" />
    <script src="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.js"></script>

    <script language="javascript">
        var map;

        function init() {
            map = new L.Map('map');
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
                maxZoom: 18
            }).addTo(map);
            map.attributionControl.setPrefix(''); // Don't show the 'Powered by Leaflet' text.

            // map view before we get the location
            map.setView(new L.LatLng(51.505, -0.09), 13);
        }

        function onLocationFound(e) {
            var radius = e.accuracy / 2;
            var location = e.latlng
            L.marker(location).addTo(map)
            L.circle(location, radius).addTo(map);
        }

        function onLocationError(e) {
            alert(e.message);
        }

        function getLocationLeaflet() {
            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);

            map.locate({setView: true, maxZoom: 16});
        }
    </script>

</head>
<body onLoad="javascript:init();">
    <div id="map" style="height: 200px"></div>
    <input type="button" value="Locate me!" onClick="javascript:getLocationLeaflet();">

</body>
</html>
