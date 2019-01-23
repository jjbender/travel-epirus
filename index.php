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
<div id="search-module"><gcse:search></gcse:search></div>
<div class="slidethree">
  <div class="itemimg">
    <img src="./assets/images/ioannina.png" </img>
    <a href="?dest=ioannina"> <h3> <?php echo $lang['Ioannina']; ?> </h3> </a>
  </div>
  <div class="itemimg"><img src="./assets/images/parga.png"</img><a href="?dest=parga"> <h3> <?php echo $lang['Parga']; ?> </h3> </a> </div>
  <div class="itemimg"><img src="./assets/images/preveza.png"</img> <a href="?dest=preveza"> <h3> <?php echo $lang['Preveza']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/igoumenitsa.png"</img> <a href="?dest=igoumenitsa"> <h3> <?php echo $lang['Igoumenitsa']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/konitsa.png"</img> <a href="?dest=konitsa"> <h3> <?php echo $lang['Konitsa']; ?> </h3> </a> </div>
  <div class="itemimg"><img src="./assets/images/metsovo.png"</img><a href="?dest=metsovo"> <h3> <?php echo $lang['Metsovo']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/dodoni.png"</img><a href="?dest=dodoni"> <h3> <?php echo $lang['Dodoni']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/nikopolis.png"</img><a href="?dest=nikopolis"> <h3> <?php echo $lang['Nikopolis']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/syvota.png"</img> <a href="?dest=syvota"> <h3> <?php echo $lang['Syvota']; ?> </h3> </a></div>
  <div class="itemimg"><img src="./assets/images/zagori.png"</img> <a href="?dest=zagori"> <h3> <?php echo $lang['Zagori']; ?> </h3> </a></div>
  <div class="itemimg"><img src="./assets/images/arta.png"</img> <a href="?dest=arta"> <h3> <?php echo $lang['Arta']; ?> </h3> </a>  </div>
  <div class="itemimg"><img src="./assets/images/tzoumerka.png"</img> <a href="?dest=tzoumerka"> <h3> <?php echo $lang['Tzoumerka']; ?> </h3> </a>  </div>

</div>
<br>

<script>
  (function() {
    var cx = '012382117509269327007:6kvtuxwsw74';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>






<?php include_once __DIR__.'/views/seg/footer.php'; ?>
