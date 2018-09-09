<!--<!doctype html>
<html amp lang="en">
  <head>
  <title>Travel Epirus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
<link rel="stylesheet" href="assets\styles\style.css" type="text/css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>
</head>
<body>

<! topnav -logo https://logomakr.com/8NgXv0-->
<?php include ('config/config.php');
      include ('views/seg/header.php'); ?>




<div id="slide1">
  <div class="flex-container">

    <div class="column">   <h1 align="left" style="color:#51007A;font-size: 2.5em; margin:0 25% 0 10%;"> Welcome to the Greek region <br> with  breathtaking landscapes <br> and the deepest gorge in the world  !</h1></div>
    <div class="column" id="mapid"></div>
  </div></div>

<h4 style="margin-right:80%"> Find it all on a map </h4>


<div id="slide2">
  <h2>  More than 100000 international tourists visited Epirus in 2016 </h2><form>
<h2 style="font-size: 1.2em">  Be the first to get their impressions about any Epirus travel destination!<br><input type="search" value="Website Search"> <input type="submit" value="search"></h2> </form></div>





<script>
	var mymap = L.map('mapid').setView([39.5661, 20.7583], 8);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

</script>


<h2> <div id="h5index">   Check out our hottest destinations! </div> </h2>

<div class="indexgrid">
  <div class="itemimg">
    <img src="assets/images/ioannina.png" </img>
    <a href="views/ioannina.php"> <h3> Ioannina </h3> </a>
  </div>
  <div class="itemimg"><img src="assets/images/parga.png"</img><a href="views/parga.php"> <h3> Parga </h3> </a> </div>
  <div class="itemimg"><img src="assets/images/preveza.png"</img> <a href="views/preveza.html"> <h3> Preveza </h3> </a>  </div>
  <div class="itemimg"><img src="assets/images/igoumenitsa.png"</img> <a href="views/igoumenitsa.html"> <h3> Igoumenitsa </h3> </a>  </div>
  <div class="itemimg"><img src="assets/images/konitsa.png"</img> <a href="views/konitsa.html"> <h3> Konitsa </h3> </a> </div>
  <div class="itemimg"><img src="assets/images/papigko.png"</img><a href="views/papigko.html"> <h3> Papigko </h3> </a>  </div>
  <div class="itemimg"><img src="assets/images/syvota.png"</img> <a href="views/syvota.html"> <h3> Syvota </h3> </a></div>
  <div class="itemimg"><img src="assets/images/zagori.png"</img> <a href="views/zagori.html"> <h3> Zagori </h3> </a></div>

</div>
<br>
<!-- view-source:http://xn-----6kccazdogc2ajaki7drj2e.xn--p1ai/  for the js events-->
<?php include ('views/seg/footer.php'); ?>
