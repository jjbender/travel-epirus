<?php
include 'config/lang-module.php';
include_once('./assets/docs/api-keys.php');
?>

<div id="slide1">
  <div class="flex-container">


    <div class="column">   <h1 align="left" style="color:#51007A;font-size: 2.5em; margin:0 25% 0 10%;"> <?php echo $lang['SLIDEONE_TEXTONE']; ?> </h1></div>
    <div class="column" id="mapid"></div>
  </div></div>
<div id="slide2">
  <h2> <?php echo $lang['SLIDETWO_TEXTONE']; ?>  </h2><form>

<h2 style="font-size: 1.2em"> <?php echo $lang['SLIDETWO_TEXTTWO']; ?> <br><!--<input type="search" value="Website Search"> <input type="submit" value="search">--></h2> </form></div>
<script>
  var token = '<?php echo $leaflet_access_token; ?>';
	var mymap = L.map('mapid').setView([39.5661, 20.7583], 8);
  var mymapargument = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='.concat(token);
	L.tileLayer(mymapargument, {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

</script>
