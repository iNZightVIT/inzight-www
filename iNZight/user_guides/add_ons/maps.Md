# Maps

The Maps Module aims at making it easy to visualise geographical data on a map, and investigate patterns of variables. Currently, only data sets containing Longitude and Latitude values can be drawn, but we will soon be adding the ability to display data on regions (such as countries, states, etc).


## Getting Started

To launch the Maps module for the first time, you'll need to load an appropriate dataset. We've included one in the default data folder called <code>QUAKESNZ2000.csv</code>. From there, go to __Advanced__ and click __Maps__. The first time you launch it, you'll need to download the module - this will happen automatically.

<p class="note">
  NOTE for Windows Users: If you are asked if you would like 'to use a personal library instead?', click "NO", close iNZight, and run it again as admin (right-click > run as admin) to ensure the module is installed correctly.
</p>


## Selecting the Variables

iNZight needs to know two things before it can give you a map (it will try to guess first, but you might need to correct it):

1. The latitude variable (degrees north/south of the equator), and
2. The longitude variable (degrees east/west of Greenwich, England).

Once you've selected those, click "Ok" and iNZight will plot your data on a map!


## Coding More Variables

Just like with a standard scatter plot, iNZight lets you code other variables in several ways:

- __Colour__: points will be coloured by the chosen variable.

- __Point size__: the area of each point will be proportional to the value of the chosen variable.

- __Transparency__: the transparency (how visible the points are) will be proportional to the chosen variable.


### And there's more to come!

The maps module is still being developed, and there's a lot we are waiting to release!

- __Zooming__: you'll be able to click a point on the map and zoom in on it.

- __Colour palettes__: this will give you a far better choice of colours, letting you customise your plot even more.

- __Data on Regions__: Use variables to colour entire areas, such as countries, regions, districts, states ... 
