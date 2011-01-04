<?php

include('html.php');
html::header('APLpy Screenshots');

include('banner.php');
include('menu.php');

?>

<div id="content">

    <h3>Near-IR Image of the Galactic Center (see <a href="tutorial.php">Tutorial</a>)</h3>
    <img src='images/screen1.png'><br><br>
    
    <h3>Spitzer 8 microns mosaic of the LMC</h3>
    <img src='images/screen2.png'><!-- <br><br>
        
        <h3>Spitzer 4.5,5.8, and 8.0 micron mosaic of the M16 region in the GLIMPSE Survey</h3>
        <img src='images/screen3.png'><br><br> -->
</div>

<?php

include('rightmenu.php');

html::footer();

?>