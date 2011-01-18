<?php

include('html.php');
html::header('APLpy Installation');

include('banner.php');
include('menu.php');

?>

<div id="content">
    <h1>Installation Instructions</h1>
    <p class="mainText">APLpy requires the following packages to function correctly:
    <ul>
    <li><a href="http://numpy.scipy.org/">numpy</a></li>
    <li><a href="http://matplotlib.sourceforge.net/">matplotlib</a></li>
    <li><a href="http://www.stsci.edu/resources/software_hardware/pyfits/Download">pyfits</a></li>
    <li><a href="https://trac6.assembla.com/astrolib">pywcs</a></li>
    </ul>
    </p>
    
    <p class="mainText">In addition, the following optional packages enhance the functionality of APLpy: 
    <ul>
    <li><a href="http://sourceforge.net/projects/pyparsing/">pyparsing </a></li>
    <li><a href="http://leejjoon.github.com/pyregion/">pyregion </a></li>
    <li><a href="http://www.pythonware.com/products/pil/">PIL</a></li>
    <li><a href="http://montage.ipac.caltech.edu/">montage</a></li>
    
    </ul>
    </p>

    <h2>Easy Installation</h2>

    <h3>NumPy and Matplotlib</h3>

    <p class="mainText">
    Numpy and matplotlib provide pre-compiled packages for most platforms.
    For Mac OS X, you can download .dmg files for Numpy and Matplotlib from
    <a href="http://new.scipy.org/download.html">here</a> and 
    <a href="http://sourceforge.net/projects/matplotlib/files/matplotlib/matplotlib-1.0/">here</a>. 
    On Linux, most package managers will be able to install numpy and matplotlib.
    </p>
    
    <h3>Other Dependencies and <code>APLpy</code></h3>
    <p class="mainText">
    The easiest way to install APLpy and its remaining dependencies is through the 
    <a href="http://gist.github.com/raw/564472/auto_install_aplpy.py">auto-install-aplpy
    </a> script 
    (<a href="http://gist.github.com/gists/564472">source</a>). 
    Using the auto-install script is very quick and easy. Below is an example of 
    what you would type via the command line to get started.

    <p class="Code">
        python auto_install_aplpy.py
    </p>

    <p class="mainText">
        We recommend this method, but if you prefer to installing everything manually
        then feel free to do so. 
    </p>
    <h2><code>APLpy</code></h2>

    <p class="mainText">
        If you have <code>easy_install</code>, you can install APLpy by simply typing
    </p>    

    <p class="Code">
        easy_install aplpy
    </p>

    <p class="mainText">
        Otherwise, you can install APLpy by downloading the latest available tar file from
        <a href="https://github.com/aplpy/aplpy/archives/master">here</a>
        and follow the standard installation method:
    </p>

    <p class="Code">  
        tar xvzf APLpy-0.9.x.tar.gz<br>
        cd APLpy-0.9.x<br>
        sudo python setup.py install
    </p>
    
    <h2><code>Montage</code></h2>

    <p class="mainText">
        Currently, one of the features in APLpy (re-projecting a FITS file to point
        north) requires Montage to be
        installed. Montage is a set of tools developed at the Infrared Processing and
        Analysis Center (IPAC) to re-project and mosaic FITS files. If you do wish to
        use the <code>north</code> argument when initializing a
        <code>FITSFigure</code> instance, you will need to install Montage.
        Installation instructions are available on the <a
        href="http://montage.ipac.caltech.edu/">Montage</a> website.
    </p>
        <div id="crumb">
If you have any questions or comments contact us <a class="mailto" href="mailto:astropython@gmail.com"> here </a>
        </div>
</div>

<?php

include('rightmenu.php');

html::footer();

?>
