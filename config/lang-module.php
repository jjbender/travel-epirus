<?php
if (isset($_GET['lang'])){
  $lang = $_GET['lang'];
  $_SESSION['lang'] = $lang;
  setcookie('lang', $lang, time() + (3600 * 24 * 30));
  }
  else if(isset($_SESSION['lang'])){
    $lang = $_SESSION['lang'];
  }
  else if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];
  }
  else{
    $lang = 'en';
  }

switch ($lang) {
    case 'en':
    $lang_file='eng.php';
    break;
    case 'ru':
    $lang_file='ru.php';
    break;
    default:
    $lang_file='eng.php';
    break;
}

include './scripts/arrays/'.$lang_file;
?>
