<?php

include ('html.php');
html::header('APLpy Home Page');

include('banner.php');
include('menu.php');

?>

<div id="content">

    <div id= "mainImage"></div>

    <div id="imageSource">A plot generated by APLpy using 2MASS data</div>

    <h2>APLpy is here!</h2>

    <div id="textBox">
    
       <p class= "mainText">
           APLpy (the Astronomical Plotting Library in Python) is a Python module aimed 
           at producing publication-quality plots of astronomical imaging data in FITS 
           format. The module uses 
           <a target="_blank" href="http://matplotlib.sourceforge.net/">Matplotlib</a>, 
           a powerful and interactive 
           plotting package. It is capable of creating output files in several graphical 
           formats, including EPS, PDF, PS, PNG, and SVG.
        </p>
        
        <h3>Main features</h3>
        
        <ul>
            <li>Make plots interactively or using scripts
            <li>Show grayscale, colorscale, and 3-color RGB images of FITS files
            <li>Generate co-aligned FITS cubes to make 3-color RGB images
            <li>Overlay any number of contour sets
            <li>Overlay markers with fully customizable symbols
            <li>Plot customizable shapes like circles, ellipses, and rectangles
            <li>Overlay ds9 region files
            <li>Overlay coordinate grids
            <li>Show colorbars, scalebars, and beams
            <li>Customize the appearance of labels and ticks
            <li>Hide, show, and remove different contour and marker layers
            <li>Pan, zoom, and save any view as a full publication-quality plot
            <li>Save plots as EPS, PDF, PS, PNG, and SVG
         </ul>
         
         <p class="mainText">
             To request features, please leave a request <a href="https://github.com/aplpy/aplpy/issues">here</a>.
        </p>
        
        <h3>Getting Started</h3>
    
        <p class="mainText">
            Want to get started? Then download the package through 
            <a href="https://github.com/aplpy/aplpy/archives/master">GitHub</a>. 
            Follow the installation instructions in the downloaded folder and you should be 
            set to use APLpy. Check out the <a href="documentation/quickstart.html">Tutorial</a> page on how 
            to make some beautiful and simple plots. 
         </p>
         
         <h3>Reporting problems</h3>
         
         <p class="mainText">
            If you run into problems with APLpy, please leave a bug report <a href="https://github.com/aplpy/aplpy/issues">here</a>.
         </p>
         
         <h3>Source code</h3>

         <p class="mainText">   
            If you're gutsy and know what you're 
            doing with Python you can download the bleeding-edge source code with Git.
        </p>
    
        <p class="Code">
            git clone git://github.com/aplpy/aplpy.git APLpy
        </p>

    </div>

    <div id="crumb">
        If you have any questions or comments contact us <a class="mailto" href="mailto:astropython@gmail.com"> here </a>
    </div>

</div>

<?php

include('rightmenu.php');

html::footer();
?>
