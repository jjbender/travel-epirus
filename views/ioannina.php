<?php
include 'config/lang-module.php';
include 'config/weather-module.php';
?>
<div class="dest-card">
  <div class="dest-title"><?php echo $lang['Ioannina']; ?> </div>
  <div class="dest-avatar"><img src="./assets/images/ioannina.png" alt ="ioannina" align="left"></div>
  <h4>  </h4>
  <div class="dest-card-content"> Current temperature <?php echo($_SESSION['gettemp']);?>&#8451 <br> Current wind speed <?php echo($_SESSION['getwind']);?>m/s <br> Current weather <?php echo($_SESSION['getweather']);?><br><br><?php echo  $lang['ioannina_textone']; ?> </h5> </div>

  <p><button onclick="toggleText()">Useful websites</button></p>
  <div id="myDIV"></div>
  <a href="https://www.tripadvisor.com/Tourism-g189453-Ioannina_Ioannina_Region_Epirus-Vacations.html" target="_blank"><i class="fa fa-tripadvisor"></i></a>
 <a href="https://twitter.com/hashtag/ioannina?f=tweets&vertical=default&src=hash" target="_blank"><i class="fa fa-twitter"></i></a>
 <a href="https://www.instagram.com/explore/tags/ioannina/" target="_blank"><i class="fa fa-instagram"></i></a>
 <a href="#"><i class="fa fa-facebook" target="_blank"></i></a>
<br>
<br>
</div>






<!-- https://codepen.io/jh3y/pen/WwVKLN-->

<div class="carousel">
    <div class="carousel-inner">
      <hr><div class="dest-title" align="center"> Videos about Ioannina </div> <hr>
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xE3g0wqDi6c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ssyppxSVccs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/8R56EZH1Oyk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item">
          <h2> Return to the first video </h2>
        </div>
        <label for="carousel-4" class="carousel-control prev control-1">‹</label>
        <label for="carousel-3" class="carousel-control prev control-1">‹</label>
        <label for="carousel-2" class="carousel-control next control-1">›</label>
        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
        <label for="carousel-3" class="carousel-control next control-2">›</label>
        <label for="carousel-2" class="carousel-control prev control-3">‹</label>
        <label for="carousel-1" class="carousel-control next control-3">›</label>
        <label for="carousel-4" class="carousel-control next control-3">‹</label>
        <ol class="carousel-indicators">
            <li>
                <label for="carousel-1" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-2" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-3" class="carousel-bullet">•</label>
            </li>
            <li>
                <label for="carousel-4" class="carousel-bullet">•</label>
            </li>
        </ol>
    </div>
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
