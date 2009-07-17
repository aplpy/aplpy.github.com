Installing Montage
------------------

Montage is a package developed by IPAC designed to handle the
reprojection of FITS files. APLpy relies on Montage for several functions,
such as ``aplpy.make_rgb_cube()`` or the ``north=True``
argument in ``aplpy.FITSFigure()``. To use these features,
Montage needs to be installed.
    
Obtaining and installing Montage
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    
Montage can be downloaded from here_. Once downlaoded, unpack the package in a directory of your choice (such as a user directory, for instance ``~/usr``, or a system-wide directory, for instance ``/usr/local``). For example, the following will unpack Montage inside ``/usr/local``::
    
    cd /usr/local
    sudo wget http://montage.ipac.caltech.edu/ FILL IN HERE
    sudo tar xvzf Montage_vX.Y
    
Once Montage is unpacked, go to the Montage directory and compile using ``make`` (or ``sudo make`` if in a system-wide directory such as ``/usr/local``)

.. _here: http://montage.ipac.caltech.edu/docs/download.html
    
Configuring the ``$PATH`` environment variable
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
    
Once Montage has been compiled, binaries will be present in ``bin/`` inside the Montage directory. For APLpy to correctly see the Montage binaries, you will need to add the ``bin/`` directory to your ``$PATH`` environment variable. For example, if you installed Montage in ``/usr/local``, you will need to add::
        
            export PATH=/usr/local/Montage/bin:$PATH

to your ``.bashrc`` or ``.bash_profile`` file if you are using bash as your shell, or::

    setenv PATH /usr/local/Montage/bin:{$PATH}
        
to your ``.cshrc`` or ``.tcshrc`` file if you use csh or tcsh as your shell.
        
To check that Montage is correctly installed, type::

    mProject

If Montage is correctly installed, you should see something like::

    [struct stat="ERROR", msg="Usage: mProject [-z factor][-d level][-s statusfile][-h hdu][-x scale][-w weightfile][-t threshold][-X(expand)][-e(nergy-mode)][-f(ull-region)] in.fits out.fits hdr.template"]

otherwise you will get a ``command not found`` error. Once Montage is
correctly installed, you are ready to use the Montage-dependent
features of APLpy!
