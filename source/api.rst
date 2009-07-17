.. APLpy documentation master file, created by
   sphinx-quickstart on Mon Apr 20 11:16:41 2009.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

================
FITSFigure
================

--------------
Initialization
--------------

.. automodule:: aplpy
.. autoclass:: FITSFigure
   :members: __init__
   
-----
Image
-----

.. automethod:: FITSFigure.show_grayscale
.. automethod:: FITSFigure.show_colorscale
.. automethod:: FITSFigure.show_rgb
.. automethod:: FITSFigure.recenter

--------
Contours
--------

.. automethod:: FITSFigure.show_contour
   
-------
Shapes
-------

.. automethod:: FITSFigure.show_markers
.. automethod:: FITSFigure.show_circles
.. automethod:: FITSFigure.show_ellipses
.. automethod:: FITSFigure.show_rectangles
   
-----
Frame
-----

.. automethod:: FITSFigure.set_frame_color
   
----------------
Ticks
----------------

.. automethod:: FITSFigure.set_tick_xspacing
.. automethod:: FITSFigure.set_tick_yspacing
.. automethod:: FITSFigure.set_tick_color
.. automethod:: FITSFigure.set_tick_size

----------------
Tick labels
----------------

.. automethod:: FITSFigure.show_tick_labels
.. automethod:: FITSFigure.hide_tick_labels
.. automethod:: FITSFigure.set_tick_labels_xformat
.. automethod:: FITSFigure.set_tick_labels_yformat
.. automethod:: FITSFigure.set_tick_labels_style
.. automethod:: FITSFigure.set_tick_labels_family
.. automethod:: FITSFigure.set_tick_labels_size
.. automethod:: FITSFigure.set_tick_labels_weight

----------------
Axis labels
----------------

.. automethod:: FITSFigure.show_axis_labels       
.. automethod:: FITSFigure.hide_axis_labels 
.. automethod:: FITSFigure.set_axis_labels
.. automethod:: FITSFigure.set_axis_labels_xdisp
.. automethod:: FITSFigure.set_axis_labels_ydisp
.. automethod:: FITSFigure.set_axis_labels_family
.. automethod:: FITSFigure.set_axis_labels_size
.. automethod:: FITSFigure.set_axis_labels_weight
.. automethod:: FITSFigure.set_labels_latex

---------------
Coordinate Grid
---------------

.. automethod:: FITSFigure.show_grid
.. automethod:: FITSFigure.hide_grid
.. automethod:: FITSFigure.set_grid_xspacing
.. automethod:: FITSFigure.set_grid_yspacing
.. automethod:: FITSFigure.set_grid_color
.. automethod:: FITSFigure.set_grid_alpha


   
------
Layers
------
   
.. automethod:: FITSFigure.list_layers
.. automethod:: FITSFigure.remove_layer
.. automethod:: FITSFigure.hide_layer
.. automethod:: FITSFigure.show_layer
