<?php

function include_language(){
  $lang = $_SESSION('lang');
  switch ($lang) {
      case 'en':
      $lang_file='eng.php';
      break;
      case 'ru':
      $lang_file='ru.php';
      break;
      default:
      $lang_file='en.php';
      break;
    }
  include './scripts/arrays/'.$lang_file;
}


function print_destination_details($dest){
  include_once './views/'.$dest.'.php';
  }

function print_menu($menu){
  include_once 'config/lang-module.php';
  include_once './views/'.$menu.'.php';
}

function printtwoslides(){
	include './views/seg/slideoneandslidetwo.php';
}

?>
