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
    <li><a href="http://numpy.scipy.org/">Numpy</a></li>
    <li><a href="http://matplotlib.org/">Matplotlib</a></li>
    <li><a href="http://www.astropy.org">Astropy</a></li>
    </ul>
    </p>

    <p class="mainText">In addition, the following optional packages enhance the functionality of APLpy:
    <ul>
    <li><a href="http://leejjoon.github.com/pyregion/">pyregion</a> (which in turns requires <a href="http://pyparsing.wikispaces.com/">pyparsing</a>)</li>
    <li><a href="http://astrofrog.github.io/pyavm/">PyAVM</a></li>
    <li><a href="http://www.pythonware.com/products/pil/">PIL</a></li>
    <li><a href="http://www.astropy.org/montage-wrapper/">montage-wrapper</a> and <a href="http://montage.ipac.caltech.edu/">Montage</a> (the first is a Python wrapper to the second)</li>

    </ul>
    </p>

    <h2>Instructions</h2>

    <p class="mainText">
    To start with, you will need a typical Scientific Python installation
    containing <a href="http://numpy.scipy.org/">Numpy</a> and <a
    href="http://matplotlib.org/">Matplotlib</a>. There are a number of ways
    to get set up with this, but if don't previously have any Python
    installation and just want to get set up fast, and don't have an existing
    Python installation, you can use the <a
    href='https://store.continuum.io/cshop/anaconda'>Anaconda</a> Python
    distribution, which includes Numpy, Matplotlib, and Astropy. Make sure you
    set up your $PATH environment variable as instructed at the end of the
    installation process.
    </p>

    <p class="mainText">
    If you are not using the Anaconda distribution, ensure that <a
    href="http://numpy.scipy.org/">Numpy</a>, <a
    href="http://www.matplotlib.org/">Matplotlib</a>, and <a
    href="http://www.astropy.org">Astropy</a> are installed, then install
    APLpy with:
    </p>

    <p class="Code">
        pip install aplpy
    </p>

    <p class="mainText">
    If you get a ``permission denied`` error, add the --user option:
    </p>

    <p class="Code">
        pip install aplpy --user
    </p>

    <p class="mainText">
    If you don't have pip installed, you can either first install it and proceed as shown above, or you can just download the APLpy tar file from PyPI and do:
    </p>

    <p class="Code">
        tar xvzf APLpy-x.x.x.tar.gz<br>
        cd APLpy-x.x.x<br>
        python setup.py install
    </p>

    <p class="mainText">
    You can also install the optional dependencies with
    </p>

    <p class="Code">
        pip install pyregion<br>
        pip install pyavm<br>
        pip install montage-wrapper
    </p>

    <p class="mainText">
    The last one will only succeed if you have already installed the <a href="http://montage.ipac.caltech.edu/">Montage</a> standalone package.
    </p>

    <h2>MacPorts</h2>

    <p class="mainText">
    If you are using a Mac and rely on MacPorts to manage your Python installation (see <a
    href="http://astrofrog.github.com/macports-python/">here</a>) then you should be able to do:

    <p class="Code">
        sudo port install py27-aplpy
    </p>

    <p class="mainText">
    (this is for Python 2.7 - adjust the Python version number as needed)
    </p>

    <h2>Montage</h2>

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
