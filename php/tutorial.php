<?php

include ('html.php');
html::header('APLpy Tutorial');

include('banner.php');
include('menu.php');

?>
     
<!-- "content" holds the main image, headline text, and body text. --> 
<div id="content">          
    <h1>Tutorial - Baking APLpy</h1>
    <div id="textBox">
        <p class="mainText">
            APLpy was started as a project to make plotting as easy
            as possible. Likewise, learning how to use APLpy should 
            be just as easy.
        </p>
    
        <p class="mainText">
            The following tutorial will take you, step by step, through
            the main features of APLpy. You will need to download the following 
            <a href="downloads/tutorial.tar.gz">file</a>.
        </p>
    
        <p class="mainText">
            First, unpack the example files and go to the <code>tutorial</code> directory
        </p>

        <p class="Code">
            tar -xvzf tutorial.tar.gz<br />
            cd tutorial
        </p>

        <p class="mainText">
            Now, start up <code>ipython</code> and import the <code>aplpy</code> module as follows:
        </p>
    
        <p class="Code">
            ipython -pylab <br />
            import aplpy
            import numpy # For the numpy.loadtxt() function
        </p>

        <h3>Displaying a FITS image</h3>

        <p class="mainText">
            To start off, use the <code>aplpy.FITSfigure</code> class to create
            a canvas to where your data will be plotted:
        </p>

        <p class="Code">
            gc = aplpy.FITSFigure('fits/2MASS_k.fits')
        </p>

        <p class="mainText">
            and display the image using a grayscale stretch:
        </p>

        <p class="Code">
            gc.show_grayscale()
        </p>

        <p class="mainText">
            Check out the buttons at the top or bottom of the canvas (depending on the
            version of matplotlib). You will 
            see seven buttons:
        </p>

        <div align='center'>
            <br />
            <img src="images/buttons.png">
            <br />
            <br />
        </div>

        <p class="mainText">
            The first five are of interest to us here. The button with the 
            magnifying glass will allow you to select an area on the plot and zoom 
            in. To zoom out you can click on the home button (first one on the left). 
            When you're zoomed in you can pan around by clicking on the button with 
            the arrows (fourth button from the left). 
        </p>

        <p class="mainText">
            The size of the canvas can be controlled through the <code>figsize</code>
            argument. Close the current canvas and create a new figure using:
        </p>

        <p class="Code">
            gc = aplpy.FITSFigure('fits/2MASS_k.fits',figsize=(10,10))
            gc.show_grayscale()
        </p>

        <p class="mainText">
            This will create a figure that is 10 by 10 inches and will show the image as a grayscale.
            Use the following command to show a colorscale image instead:
        </p>
            
        <p class="Code">
            gc.show_colorscale()<br />
        </p>

        <p class="mainText">
            The colormap used for the colorscale image can be changed. Try the following:
        </p>

        <p class="Code">
            gc.show_colorscale(cmap='gist_heat')<br />
        </p>

        <p class="mainText">
        to show the image showing a 'heat' map. For more information on <code>show_grayscale</code> and <code>show_colorscale</code>, see the <a href="http://aplpy.sourceforge.net/doc/#image">documentation</a>. For example, you can control the minimum and maximum pixel values to show and the stretch function to use.
        </p>

        <h3>Displaying a 3-color image</h3>

        <p class="mainText">            
        It is possible to use APLpy to show 3-color images. To do this, you need a FITS file with the image - this is used for the information relating to the coordinates - and a PNG file containing the 3-color image. Both files need to have exactly the same dimensions and the pixels from the PNG file have to match those from the FITS file. An example is provided in the tutorial files. Try the following:
        </p>

        <p class="Code">
            gc.show_rgb('graphics/2MASS_arcsinh_color.png')<br />
        </p>

        <h3>Contours</h3>

        <p class="mainText">            
        APLpy can be used to overlay contours onto a grayscale/colorscale/3-color image. Try typing the following command:
        </p>

        <p class="Code">
            gc.show_contour('fits/mips_24micron.fits',colors='white')<br />
        </p>

        <p class="mainText">            
            There are a number of arguments that can be passed to <code>show_contour</code> to control the appearance of the contours as well as the number of levels to show. For more information, see the see the <a href="http://aplpy.sourceforge.net/doc/#contours">documentation</a>
        </p>

        <h3>Coordinate grid</h3>

        <p class="mainText">            
        Display a coordinate grid using:
        </p>

        <p class="Code">
            gc.show_grid()
        </p>

        <p class="mainText">            
        and hide it again using:
        </p>

        <p class="Code">
            gc.hide_grid()
        </p>

        <h3>Markers</h3>

        <p class="mainText">            
        Let's overplot positions from a source list. Here we will use loadtxt to read in the coordinates from a file, but in general you can pass any pair of lists or numpy arrays that are already defined.
        </p>

        <p class="Code">
            # If the numpy.loadtxt() command does not work <br />
            # then do "import numpy", without the quotes. <br />
            data = numpy.loadtxt('data/yso_wcs_only.txt')<br />
            ra,dec = data[:,0],data[:,1]<br />
            gc.show_markers(ra,dec,edgecolor='green',facecolor='none',<br />
                                   marker='o',s=10,alpha=0.5)<br />
        </p>

        <p class="mainText">            
        For more information about <code>show_markers</code>, see the see the <a href="http://aplpy.sourceforge.net/doc/#markers">documentation</a>
        </p>

        <h3>Layers</h3>

        <p class="mainText">            
        It's often the case that you might want to change the look of a contour or markers, but if you run <code>show_contour</code> or <code>show_markers</code> a second time, it will overplot rather than replacing. To solve this problem APLpy has 'layers' which can be manipulated in a basic way. Type
        </p>

        <p class="Code">
            gc.list_layers()
        </p>

        <p class="mainText">            
        which will print out something like this:
        </p>

        <p class="Code">
          There are 2 layers in this figure:

           -> contour_set_1
           -> scatter_set_1
        </p>

        <p class="mainText">            
        You can use <code>remove_layer</code>, <code>hide_layer</code>, and <code>show_layer</code> to manipulate the layers, and you can also specify the <code>layer=name</code> argument to <code>show_contour</code> or <code>show_markers</code>. Using the latter forces APLpy to name the layer you are creating with the name provided, and can also be used to replace an existing layer. For example, let's change the color of the markers from green to red:
        </p>

        <p class="Code">
            gc.show_markers(ra,dec,layer='scatter_set_1',edgecolor='green',<br />
                                   facecolor='none',marker='o',s=10,alpha=0.5)<br />
        </p>

        <p class="mainText">            
            Note the presence of the <code>layer='scatter_set_1'</code> which means that the current scatter plot will be replaced. For more information about layers, see the see the <a href="http://aplpy.sourceforge.net/doc/#layers">documentation</a>
        </p>

        <h3>Saving</h3>

        <p class="mainText">            
            To wrap up this tutorial, we will save the plot to a file. Type the following
        </p>

        <p class="Code">
            gc.save('myfirstplot.png')
        </p>

        <p class="mainText">            
            This will produce the following file:
        </p>

        <div align='center'>
            <img src="images/myfirstplot.png"/>
        </div>

        <p class="mainText">            
            You can of course save it as a PS/EPS, PDF, or SVG file instead. The EPS output is suitable for publication.
        </p>

        <h3>Summary</h3>

        <p class="mainText">            
            To summarize, the above plot was made using the following commands:
        </p>

        <p class="Code">
        import aplpy<br />
        import numpy<br /><br />
        gc = aplpy.FITSFigure('fits/2MASS_k.fits',figsize=(10,10))<br /><br />
        gc.show_rgb('graphics/2MASS_arcsinh_color.png')<br /><br />
        data = numpy.loadtxt('data/yso_wcs_only.txt')<br />
        ra,dec = data[:,0],data[:,1]<br />
        gc.show_contour('fits/mips_24micron.fits',colors='white')<br />
        gc.show_markers(ra,dec,layer='scatter_set_1',edgecolor='red',<br />
        facecolor='none',marker='o',s=10,alpha=0.5)<br /><br />
        gc.save('myfirstplot.png')
        </p>

        <p class="mainText">            
        There are many more methods and options, from setting the tick spacing and format to controling the label fonts. For more information, see the <a href="http://aplpy.sourceforge.net/doc/">full documentation</a>

        <p class="mainText">
            If you have a request for showing other types of tutorials please let is know us!
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
