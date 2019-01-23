<?php
include_once('./assets/docs/api-keys.php');
#post current temp, weather pic, speed wind

$url = "http://api.openweathermap.org/data/2.5/find?q=".$city."&units=metric&type=accurate&mode=xml&APPID=".$weather_app_id;
$getitem = simplexml_load_file($url);
$gettemp = $getitem->list->item->temperature['value'];
$getwind = $getitem->list->item->wind->speed['value'];
$getweather = $getitem->list->item->weather['value'];
$_SESSION['gettemp'] = $gettemp;
$_SESSION['getwind'] = $getwind;
$_SESSION['getweather'] = $getweather;

?>
