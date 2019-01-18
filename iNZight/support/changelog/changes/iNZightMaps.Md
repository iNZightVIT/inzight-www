# Version 2.1
__Release date__: 15 November 2018

## Major changes
- Replaced Google Maps with Stamen Maps due to the former no longer offering free maps

## Patches

### Patch 2.1.1 - 03/12/2018
- fix bug where Shiny graphics device would plot white background

***

# Version 2.0
__Release date__: 14 August 2018

Massive overhaul of the mapping module, using ggplot2 and sf packages.

## New Features
- Ability to map data to arbitrary shapefiles and plot variables using filled regions or centroids
- For spatial time series data: plot animated maps over time, overlay small line plots on regions or aggregate values
- Retrieve the code used for these maps 
- Add most point appearance options from regular iNZightPlots scatterplots into iNZightMaps coordinate maps

## Patches

### Patch 2.0.1 - 13/09/2018
- Add example datasets to package
- Change "opacity" labels to "transparency"
- Overall transparency slider now always visible

***
# Version 1.1
__Release date__: 11 July, 2016

## New Features

- Integrated all graphics with the iNZightPlots package
- Faster drawing of maps, and include subset-by variables
- Add shape methods for colouring regions of a map

## Patches

### Version 1.1-1 - 30/09/2016

- pass the current environment to `iNZightPlot` so `data=` works

### Version 1.1-2 - 19/11/2016

- fix up an issue where longitude value range was too large at 0 and +-180

### Version 1.1-3 - 10/04/2017

- fix bug where difference in range approx 0 but not quite

***
# Version 1.0
__Release date__: 24 February, 2016

- Plot geographical data on a map with the simplest of commands.
- Uses iNZightPlots for the base layouts, and only modifies the internal plots.
- Can currently handle coordinate and country data.
