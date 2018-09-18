<!-- topnav -logo https://logomakr.com/8NgXv0-->
<?php
include './config/config.php';
include './config/lang-module.php';
include './config/functions.php';
include './scripts/arrays/menu.php';
include_once './views/seg/header.php';


if ($_SERVER['REQUEST_URI'] === '/travel-epirus/?lang=en' || $_SERVER['REQUEST_URI'] === '/travel-epirus/?lang=ru' || $_SERVER['REQUEST_URI'] === '/travel-epirus/index.php?lang=ru' || $_SERVER['REQUEST_URI'] === '/travel-epirus/index.php?lang=en' || $_SERVER['REQUEST_URI'] === '/travel-epirus/index.php' || $_SERVER['REQUEST_URI'] === '/travel'.'-epirus/' ) {
  printtwoslides();
}


if (isset($_GET['menu'])){
    $menu = $_GET['menu'];
    print_menu($menu);
}


if (isset($_GET['dest'])){
    $dest = $_GET['dest'];
    print_destination_details($dest);
}


?>

<h2> <div id="h5index">   <?php echo $lang['GRID_TEXTONE']; ?> </div> </h2>
<div class="slidethree">
  <div class="itemimg">
    <img src="./assets/images/ioannina.png" </img>
    <a href="?dest=ioannina"> <h3> <?php echo $lang['Ioannina']; ?> </h3> </a>
  </div>
  <div class="itemimg"><img src="./assets/images/parga.png"</img><a href="?dest=parga"> <h3> <?php echo $lang['Parga']; ?> </h3> </a> </div>
  <div class="itemimg"><img src="./assets/images/preveza.png"</img> <a href="?dest=preveza"> <h3> <?php echo $lang['Preveza']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/igoumenitsa.png"</img> <a href="?dest=igoumenitsa"> <h3> <?php echo $lang['Igoumenitsa']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/konitsa.png"</img> <a href="?dest=konitsa"> <h3> <?php echo $lang['Konitsa']; ?> </h3> </a> </div>
  <div class="itemimg"><img src="./assets/images/papigko.png"</img><a href="?dest=papigko"> <h3> <?php echo $lang['Papigko']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/syvota.png"</img> <a href="?dest=syvota"> <h3> <?php echo $lang['Syvota']; ?> </h3> </a></div>
  <div class="itemimg"><img src="./assets/images/zagori.png"</img> <a href="?dest=zagori"> <h3> <?php echo $lang['Zagori']; ?> </h3> </a></div>

</div>
<br>





<?php include_once __DIR__.'/views/seg/footer.php'; ?>
