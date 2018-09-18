<?php
include 'config/lang-module.php';
?>
<div class="dest-card">
  <div class="dest-title"><?php echo $lang['Ioannina']; ?> </div>
  <div class="dest-avatar"><img src="./assets/images/ioannina.png" alt ="ioannina" align="left"></div>
  <div class="dest-card-content"> <?php echo  $lang['ioannina_textone']; ?>  </h5> </div>
  <p><button onclick="toggleText()">Useful websites</button></p>
  <div id="myDIV"></div>
  <a href="#"><i class="fa fa-tripadvisor"></i></a>
 <a href="#"><i class="fa fa-twitter"></i></a>
 <a href="#"><i class="fa fa-instagram"></i></a>
 <a href="#"><i class="fa fa-facebook"></i></a>
<br>
<br>
</div>

<div class="dest-analytics">
<hr><div class="dest-title"> Fresh tourists rating about Ioannina </div> <hr>
<img src="./assets/images/sketch-opinions-ioannina.png" height="100%" alt="graph"</img>
<br>
</div>

<div class="dest-embedded-card">
  <hr><div class="dest-title"> Media about Ioannina </div> <hr>

<br>
<div class="i_item" align="right"><a data-pin-do="embedPin" href="https://www.pinterest.com/pin/349591989802722953/"></a> <script async defer src="//assets.pinterest.com/js/pinit.js"></script></div>
<br> <iframe width="560" height="315" src="https://www.youtube.com/embed/xE3g0wqDi6c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Panoramic view of Pamvotida lake. <a href="https://twitter.com/hashtag/Ioannina?src=hash&amp;ref_src=twsrc%5Etfw">#Ioannina</a> <a href="https://twitter.com/hashtag/visitGreece?src=hash&amp;ref_src=twsrc%5Etfw">#visitGreece</a> <a href="https://twitter.com/hashtag/Greece?src=hash&amp;ref_src=twsrc%5Etfw">#Greece</a> <a href="https://t.co/K6Til1fzzI">pic.twitter.com/K6Til1fzzI</a></p>&mdash; Katerina Kotsoni (@KaterinaKotsoni) <a href="https://twitter.com/KaterinaKotsoni/status/1040937396165066753?ref_src=twsrc%5Etfw">September 15, 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>

<script>
function toggleText() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "") {
        x.innerHTML = "<h5 style=\"color:black;\"> ktel Ioannina - ktel.ioanninon.gr</h5>";
    } else {
        x.innerHTML = "";
    }
}
</script>
