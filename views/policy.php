<?php
print ('<h2 style="color:black">That is privacy policy page</h2>')
?>

<p>Show the full privacy policy </p>


<p><button onclick="myFunction()">Click Me</button></p>

<div id="myDIV">Hello</div>

<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.innerHTML === "Hide") {
        x.innerHTML = "<a href=\"../privacy-policy.php\">Show</a>";
    } else {
        x.innerHTML = "Hide";
    }
}
</script>
