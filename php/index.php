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
             A list of planned features is available on our <a href="http://sourceforge.net/tracker/?group_id=254216&atid=1451522">Feature Requests</a> page.
             If there are any features that you would like to see implemented that do not appear in this list, just
             email us <a class="mailto" href="mailto:astropython@gmail.com"> here </a> or
             leave a request <a href="http://sourceforge.net/tracker/?group_id=254216&atid=1451522">here</a>.
        </p>
        
        <h3>Getting Started</h3>
    
        <p class="mainText">
            Want to get started? Then download the package through 
            <a href="https://sourceforge.net/project/showfiles.php?group_id=254216">Sourceforge</a>. 
            Follow the installation instructions in the downloaded folder and you should be 
            set to use APLpy. Check out the <a href="http://aplpy.sourceforge.net/documentation/quickstart.html">Tutorial</a> page on how 
            to make some beautiful and simple plots. 
            If you want to see the latest features added
            to APLpy then read the current 
            <a href="http://voxel.dl.sourceforge.net/project/aplpy/APLpy/APLpy-0.9.5/Release_notes">release notes</a>.
         </p>
         
         <h3>Reporting problems</h3>
         
         <p class="mainText">
            If you run into problems with APLpy, drop us an email <a class="mailto" href="mailto:astropython@gmail.com"> here </a>
            or leave a bug report <a href="http://sourceforge.net/tracker/?group_id=254216">here</a>.
         </p>
         
         <h3>Source code</h3>

         <p class="mainText">   
            If you're gutsy and know what you're 
            doing with Python you can download the bleeding-edge source code via Subversion.
        </p>
    
        <p class="Code">
            svn co https://aplpy.svn.sourceforge.net/svnroot/aplpy/trunk/src/APLpy APLpy 
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

