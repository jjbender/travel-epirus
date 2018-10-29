<?php
#post current temp, weather pic, speed wind
$url = "http://api.openweathermap.org/data/2.5/find?q=ioannina&units=metric&type=accurate&mode=xml&APPID=ad6755b243af44574a960f5c371f8115";
$getitem = simplexml_load_file($url);
$gettemp = $getitem->list->item->temperature['value'];
$getwind = $getitem->list->item->wind->speed['value'];
$getweather = $getitem->list->item->weather['value'];
$_SESSION['gettemp'] = $gettemp;
$_SESSION['getwind'] = $getwind;
$_SESSION['getweather'] = $getweather;

?>
