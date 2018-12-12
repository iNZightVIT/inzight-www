# Maps

The Maps Module aims at making it easy to visualise geographical data on a map, and investigate patterns of variables.
There are two situations that iNZight can handle:

1. [Each observation has a __co-ordinate__ value](#coordinates), or
2. [The data are associated with __regions__](#regions) (such as __Countries__, __states__, etc).


## Geographical Co-ordinate Data  {#coordinates}

Co-ordinates give a unique position of any point on the Earth.
The __latitude__ defines the __vertical y position__ (North/South), while the __longitude__ defines the __horizontal x position__ (East/West).

In this example, we will be using the __New Zealand Quakes 2000__ data, which you can load by going to
 __File__ > [[ VLITE ?? __Dataset Examples__ || __Example data__ ]], selecting the 
 __Maps__ [[ VLITE ?? category || module ]], and choosing the data __nzquakes__ (see screenshot below).

![Loading the NZ Quakes Data](../../img/user_guides/advanced/maps/01_maps_loadquakes[[ VLITE ?? _lite ]].png)

Once this is loaded, you can launch the Maps module from __Advanced__ > __Maps__.

[[ VLITE ??  || 
NOTE: The first time you launch it, you'll+
ad the module - this will happen automatically.
]]


## Selecting the Variables

When you launch the maps module, you'll be presented with a window to let you select the variables to use.

![Selecting the latitude and longitude](../../img/user_guides/advanced/maps/02_maps_load[[ VLITE ?? _lite ]].png)

First, make sure the __Coordinate__ option is selected, and then specify the Latitude and Longitude variables (iNZight will try to guess these automatically, but you might need to select them manually if they have nonstandard names).

Once you've selected those, click "Ok" and iNZight will plot your data on a map!

![Selecting the latitude and longitude](../../img/user_guides/advanced/maps/03_maps_main1[[ VLITE ?? _lite ]].png) {.width600}



## Mapping Options

###__Extra Plot Options__: 
iNZight Maps uses Stamen map tiles (via ggmap)
 
__Map-type:__ options are _terrain_ (coloured terrain map with some features names), _terrain-background_ (no added names), _toner-lite_ (white map on grey background) and _toner_ (white map on black background).

__Overall point size__ (_Slider_)__:__ scale everything drawn on top of the plot/map to a chosen multiple of their current sizes (default =1)

### __Colour__: 

_Either choose a ..._  
__Point colour:__ select a single colour to apply to all of the points  
_Or select the names of a ..._  
__Colour by _variable___ to differentially colour points according the values of the chosen variable.

___Additional options__ which appear once a __Colour-by__ variable has been selected_:
* __Palette__ for selecting a colour palette
* __Reverse palette__ (_check-box_)__:__ Reverse the way the values of the colour-by variable are mapped to colours (smallest-to-biggest/biggest-to-smallest)
* __Use percentiles__ (_check-box_)__:__ Apply the colour range according to the percentiles of the colour-by variable instead of its raw values.
* __Cycle levels__ (_categorical colour-by variable_)__:__ Clicking the arrow icons results in just the points from one category at a time being highlighted, with the others dimmed
* __Cycle quantiles__ (_numeric colour-by variable_)__:__ Behaves in the same way with just the points in a quantile being highlighted. By default just 4 quantiles are used (useful if the colour-by variable is highly skewed), but …
 *	__\#quantiles__ allows you to change 4 to some other number of quantiles
* __Back cycle icon__ results in all of the points being highlighted again


### __Size__: 

This lets just adjust the overall size of points from .05 to 3 times original size. Alternative variables can be selected and the resize can be proportional or emphasize.

### __Opacity__: 

This adjusts the overall transparency of points, from 0 - fully visible to 1 - fully invisible. This can be specified by variable and the point opacity can be in reverse order. 

[[ VLITE ??  - __Connect points by lines__: Select to reveal the line colour selection and draw lines between points
||
]]
### __Point Symbol__: 

Select from circle, square, diamond, triangle and inverted triangle. Select the variable to show and line width for the symbol.
### __Connect Points__: 

Check the box to draw lines between points. You can change the line colour and width.


### __Sub-setting__: 

As with the main iNZight program, you can generate subsets by selecting a variable from either one or both of the subset menus.

### And there's more to come!

The maps module is still being developed, and there's a lot we are waiting to release!

- __Colour palettes__: this will give you a far better choice of colours, letting you customise your plot even more.





## Geographical Regions {#regions}

In many cases, you might have data with regional information (where "region" can be countries, states, provinces, electorates, etc.).
iNZight allows you to display this information on a map of outlines, with each region coloured depending on a chosen variable.

In this example, we will be using the __Gap Minder__ data, which you can load by going to  __File__ > __[[VLITE ?? Dataset Examples || Example data]]__, selecting the[[VLITE ?? __ Future Learn__ category ||    __ Default__ module]], and choosing the data __gapminder__ (see screenshot below).

![Loading the Gap minder Data](../../img/user_guides/advanced/maps/04_maps_loadgapminder[[VLITE ?? _lite]].png)

Once this is loaded, you can launch the Maps module from __Advanced__ > __Maps__.
[[VLITE ??   ||
  NOTE: The first time you launch it, you'll need to download the module - this will happen automatically.
]]

## Selecting the Variables

When you launch the maps module, you'll be presented with a window to let you select the variables to use.

[[VLITE ??   || <img src='../../img/user_guides/advanced/maps/05_maps_shapeload.png' alt='Select Variables to load'> ]]

First, make sure the __Regions__ option is selected, and then specify the following information:

- __Map Location__: this is the overall location of your data. For this example, the Gap Minder dataset contains data on countries, so we have selected the __world__ map.

- __Location Variable__: this dropdown tells iNZight which variable in the dataset contains the geographical location. In the Gap Minder dataset, the variable __Country__ contains the names of countries.

[[ VLITE ??    || ]]

Once you've selected those, click **Ok** and iNZight will load the necessary files.


## Plotting Variables ]]

To generate a map and display your data, select a variable [[VLITE ?? ||from the dropdown at the top-left of the window]]. Here, we have chosen __ChildrenPerWoman__.

![Selecting the plotting variable](../../img/user_guides/advanced/maps/06_maps_shapemain[[VLITE ?? _lite]].png) {.width600}


## Sub-setting the data

As with the main iNZight program, you can view multiple subsets easily by selecting a sub-setting variable. In the image below, we have selected __Year\_cat__, which contains a factor version of the year for each record.
This allows us to see how the average number of children per woman changes over time.

![Selecting the subsetting variable](../../img/user_guides/advanced/maps/07_maps_subset[[VLITE ?? _lite]].png) {.width600}



## Plot Options

There are several plot options available in this module.

- __Colour__: you can adjust the colour used on the map from here. At the bottom, there are two options, __heat__ and __terrain__, which offer alternative colour palettes. The screenshow below uses the __heat__ palette.

- __Missing value colour__: To make missing values more or less visible, you can modify the colour used to shade those regions.

- __Plot labels__: this lets you add labels to the plot. The options are __Name__, which adds the region names, __Value__, which adds the value of the chosen variable, and __Both__, which adds the Name and Value.

[[VLITE ?? || - __Zooming__: You can zoom in on a region by clicking the __zoom__ icon (magnifying glass) in the plot toolbar (bottom right of the screen), and then clicking a point on the map to zoom in to. ]]


![Some other options](../../img/user_guides/advanced/maps/08_maps_heatcolour[[VLITE ?? _lite]].png) {.width600}
