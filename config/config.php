<?php
  session_start();

  if (isset($_GET['lang']))
  {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
  setcookie('lang', $lang, time() + (3600 * 24 * 30));
  }
  else if(isset($_SESSION['lang']))
  {
  $lang = $_SESSION['lang'];
  }
  else if(isset($_COOKIE['lang']))
  {
  $lang = $_COOKIE['lang'];
  }
  else if(isset($_POST['lang'])){
  $lang = $_POST['lang'];
  }
  else
  {
  $lang = 'en';
  }

#manage lang using switch
  switch ($lang) {
    case 'en':
    $lang_file='eng.php';
    break;
    case 'ru':
    $lang_file='ru.php';
    break;
  }


#don`t know how to make it
  function switchonclick (){
    if ($_SESSION['lang'] = 'en')
      { $_SESSION['lang'] = 'ru';
      }
    elseif ($_SESSION['lang'] = 'ru')
      {$_SESSION['lang'] = 'en';
      }
  }


include './scripts/arrays/'.$lang_file;
include 'functions.php';
include './scripts/arrays/menu.php';

#top-$menu

#dest_list



?>
