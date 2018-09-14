<?php
#list of deprecated/unused functions


function print_destination_details($dest)
  {
    if (isset($_SESSION['dest'])){
  	include_once './views/'.$dest.'.php';
  }
    elseif (isset('dest')){
      include_once './views/seg/slideoneandslidetwo.php';
      }
    }
    else {
      include_once './views/404.php'
    }
  }


include_once 'menu-functions.php';

if (isset($_GET['menu']))
{
	$menu = $_GET['menu'];
	print_element ($menu);
} else {
	print_menu($menu);}





function print_menu (){
	$menu = array(
		'about' =>'about.php',
		'policy'=> 'policy.php' ,
		'home' => '/',
	);
foreach $menu {
	print "<a href=\"?menu="."$menu.""\">";
													}
}


function print_element (){
include_once './views/'.$menu;}



function myselector(){
    $languages = ('ru','en');
    if $languages[] == $lang[]{
      echo "$lang"
    }
    if( ! empty( $languages ) ) {
        foreach( $languages as $l ){
            if( ! $l['active'] ) {
                $items .= '<li class="menu-item"><a href="' . $l['url'] . '">' . $l['native_name'] . '</a></li>';
            }
        }
    }

    return $items;
}


echo "/?lang=ru";

function switch_lang ($lang) {
  switch_lang ($lang){
  case 'en':
  echo "./?lang=ru";
  break;
  case 'ru' :
  echo "./?lang=en";
  break;
endswitch;
}
}
 ?>
