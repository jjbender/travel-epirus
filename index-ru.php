<!doctype html>
<html amp lang="en">
  <head>
  <title>Travel Epirus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
<link rel="stylesheet" href="styles\style.css" type="text/css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>
</head>
<body>

<!-- topnav -logo https://logomakr.com/8NgXv0-->



<div class="header">
  <div id="logo"> <a href="index.html"> <img src="images\g4807.png" height="100%" </img>  </a> </div>
  <div class="header-right">
    <a href="index.html"> <img src="images\globe-white.png" style="; margin-top:15px;height:auto"  </img> </a>
    <a href="pages\privacypolicy.html" style="margin-top:10px">Политика</a>
    <a href="pages\about.html" style="margin-top:10px">О сайте</a>
</div></div>


<div id="slide1">
  <div class="flex-container">

    <div class="column">   <h1 align="left" style="color:#51007A;font-size: 2.5em; margin:0 15% 0 10%;"> Добро пожаловать <br> в регион Греции <br> с захватывающими дух пейзажами <br> и самым глубоким каньоном в мире! </h1></div>
    <div class="column" id="mapid"></div>
  </div></div>

<div id="slide2">
  <h2>  Более 100000 международных туристов посетили Эпир в 2016 </h2><form>
<h2 style="font-size: 1.2em">  Стань первым, кто получит их впечатления о путешествиях в любую точку Эпира!<br><input type="search" value="Website Search"> <input type="submit" value="search"></h2> </form></div>


<h4 style="margin-right:80%"> Найди всё на карте  </h4>


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



<h2> <div id="h5index">   Посмотрите наши самые горячие направления! </div> </h2>


<div class="indexgrid">
  <div class="itemimg">
    <img src="images/ioannina.png" </img>
    <a href="pages/ioannina.html"> <h3> Янина </h3> </a>
  </div>
  <div class="itemimg"><img src="images/parga.png"</img><a href="pages/parga.html"> <h3> Парга </h3> </a> </div>
  <div class="itemimg"><img src="images/preveza.png"</img> <a href="pages/preveza.html"> <h3> Превеза </h3> </a>  </div>
  <div class="itemimg"><img src="images/igoumenitsa.png"</img> <a href="pages/igoumenitsa.html"> <h3> Игуменица </h3> </a>  </div>
  <div class="itemimg"><img src="images/konitsa.png"</img> <a href="pages/konitsa.html"> <h3> Коница </h3> </a> </div>
  <div class="itemimg"><img src="images/papigko.png"</img><a href="pages/papigko.html"> <h3> Папингон </h3> </a>  </div>
  <div class="itemimg"><img src="images/syvota.png"</img> <a href="pages/syvota.html"> <h3> Сивота </h3> </a></div>
  <div class="itemimg"><img src="images/zagori.png"</img> <a href="pages/zagori.html"> <h3> Загори </h3> </a></div>

</div>

<br>

<!-- view-source:http://xn-----6kccazdogc2ajaki7drj2e.xn--p1ai/  for the js events-->

<div class="footer">
  <h6> Последнее обновление: 18.08.2018
  <br> По любым вопросам и предложениям пишите нам: niko@econ.uoi.gr </h6>
</div>


</body>
</html>
