<?php 
include 'listapersonas.php';
// die();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
		<style>
			body {
				padding: 0;
				margin: 0;
			}
			html, body, #map {
				height: 100%;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<div id="map"></div>
			<script>
				var puntocentral=[-12.046373,-77.042754];
				var map = L.map('map').setView(puntocentral, 14);
				var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                
                var listaUsuarios = JSON.parse('<?php echo $datosJSON?>');
                console.log(listaUsuarios);

                for (i=0; i<listaUsuarios.length; i++){
                    var marcadorPHP=L.marker([listaUsuarios[i]['latitud'],listaUsuarios[i]['longitud']]).addTo(map);
                }

				var LeafIcon = L.icon({iconUrl: 'images/custom-icon.png'});                
				var marcadorPHP = L.marker(puntocentral, {icon: LeafIcon}).addTo(map);
			</script>
	</body>
</html>
