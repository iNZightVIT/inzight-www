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

![Selecting the latitude and longitude](../../img/user_guides/advanced/maps/03_maps_main1[[ VLITE ?? _lite ]].png) {.width700}



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
* __Back cycle _icon___ results in all of the points being highlighted again


### __Size__: 

__Overall__ (_slider_)__:__ Multiply the current size of each point by value chosen (default value 1)

__Size by:__ Select a variable to differentially size the points by  (i.e., size according to the values of the chosen variable)

___Additional option__ which appears once a __Size-by__ variable has been selected_:
* __Resize method:__ make the area of the point either ___proportional___ to the value of the size-by variable, or ___emphasize___ (map the smallest values to a hard-coded small point-size and the largest to a large size – sometimes useful when the ratio largest/smallest is not very big)

### __Transparency/Opacity__: 

__Overall__ (_slider_)__:__ Adjust the transparency levels of all of the points uniformly (default value 0 = no change; maximum makes all points completely transparent) 

__Opacify by:__ (Opacity is the opposite of transparency) Select a variable to differentially set the opacity the points by (high values map to most visible, low to most transparent)

___Additional option__ which appears once a __Opacify-by__ variable has been selected_:

* __Reverse opacification__ (_check-box_)__:__ Reverse the way the values of the opacify-by variable are mapped to opacity/transparency levels


[[ VLITE ??  - __Connect points by lines__: Select to reveal the line colour selection and draw lines between points
||
]]
### __Point Symbol__: 

__Symbol:__ Select from _circle_, _square_, _diamond_, _triangle_ and _inverted triangle_

__Filled in symbols__ (_check-box_)__:__ Click to fill in all symbols

__Symbol by:__ Can be done according to a categorical variable which has 5 or fewer categories  
* __Symbol line width:__ Line-width multiplier

### __Connect Points__: 

Check the box to draw lines between points. You can change the line colour and width.


### __Sub-setting__: 

___Works the same way___ as in the ___main part of iNZight___, you can generate subsets by selecting a variable from either one or both of the subset menus.

Subset selection ___sliders and play buttons appear___ once a subset-by variable has been selected.






## Geographical Regions {#regions}

In many cases, you might have data with regional information (where "region" can be countries, states, provinces, electorates, etc.).

iNZight allows you to display this information on a map of outlines, with each region coloured depending on a chosen variable. Alternative representations  are also catered for.

## .... Selecting a  Map

### Select Map

Choose either __Use inbuilt Map__ (_default_) to use one of the maps already in iNZight 
 * Choose from a selection of maps of Continents, several Countries, and World maps  
or __Import Shapefile__ to start up a dialog for reading a shape file stored on your computer

Then click … __Import Map__

When a map has been imported, iNZight will also try to find a variable in your data file which best matches one of the region-naming variables on the map. It will display the names it has found beside __Data variable__ and __Map variable__. Selection boxes allow you to select replacement variables for these two roles.

It will also draw the map. Regions for which _data is present_ in the data set are shaded _green_.  
Any Regions which have _no data_ are shaded _orange_.

__Unmatched Data:__ the names of any region-values in the data that are not represented in the map will be listed here once the map has been imported. You can decide to use the map anyway or exit maps and go back to your data to do something about the non-matching names. 

__Multiple observations for each region were found__ (___Warning___)__:__ If any particular region name is found on more than row of the file this warning will appear. This often happens when we have observations for a region for several different years.  
The module will try to find a variable that “explains” the multiple observations. For want of a better name we called it a __sequence variable__

* __Select sequence variable:__ If an “explaining variable” is found its name will be displayed in a selection box alongside this title. You have the freedom to change it

__Use Map__ (_Button_)__:__ __Click__ to tell the program "I will use this map"  
    * The program will then replace the map-selection command panel with a command panel for plotting and draw an unshaded map with the appropriate boundaries

## .... Plotting on the Map

The ___first time___ you use this module ___ignore___ the sections __Map Options__ and __Extra Plot Options__

__Select Variable to display:__ Click on the name of an appropriate variable and it

### Connect Points:

__Connect points with lines__ (_check-box_)__:__ Check the box to draw lines between points. Connected in the order they appear in the data file. 




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
