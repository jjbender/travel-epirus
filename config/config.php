<?php
  session_start();

#chooselanguage
  if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "en";
  else if (isset ($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET(['lang']))) {
    if ($_GET['lang'] == "en")
      $_SESSION['lang'] = "en";
    else
      $_SESSION['lang'] = "ru";
  }
  echo "Choose language:" .$_SESSION['lang'];
#chooselanguage



?>
