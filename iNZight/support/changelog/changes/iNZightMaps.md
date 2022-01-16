## iNZightMaps 2.3.1

- remove ggsfextra from Imports

# iNZightMaps 2.3

- fix handling of colour by and join points (simultaneously)
- pass subset and size-by information through to plot title
- move the `geom_sparkline` function from the `ggsfextra` package into `iNZightMaps`
- replace the `geom_sftext` from `ggsfextra` by the `geom_sf_text` function now included in `ggplot2`

# iNZightMaps 2.2

**Release date**: 13 August 2019

- Add dot density maps

## iNZightMaps 2.1.2

**Release date**: 30 April 2019

- Remove grouped variable from summarise_at to fix map joining bug

## iNZightMaps 2.1.1

**Release date**: 03 December 2018

- fix bug where Shiny graphics device would plot white background

# iNZightMaps 2.1

**Release date**: 15 November 2018

- Replaced Google Maps with Stamen Maps due to the former no longer offering free maps

## iNZightMaps 2.0.1

**Release date**: 13 September 2018

- Add example datasets to package
- Change "opacity" labels to "transparency"
- Overall transparency slider now always visible

# Version 2.0

**Release date**: 14 August 2018

Massive overhaul of the mapping module, using ggplot2 and sf packages.

- Ability to map data to arbitrary shapefiles and plot variables using filled regions or centroids
- For spatial time series data: plot animated maps over time, overlay small line plots on regions or aggregate values
- Retrieve the code used for these maps
- Add most point appearance options from regular iNZightPlots scatterplots into iNZightMaps coordinate maps

## iNZightMaps 1.1-3

**Release date**: 10 April 2017

- fix bug where difference in range approx 0 but not quite

## iNZightMaps 1.1-2

**Release date**: 19 November 2016

- fix up an issue where longitude value range was too large at 0 and +-180

## iNZightMaps 1.1-1

**Release date**: 30 September 2016

- pass the current environment to `iNZightPlot` so `data=` works

# Version 1.1

**Release date**: 11 July, 2016

- Integrated all graphics with the iNZightPlots package
- Faster drawing of maps, and include subset-by variables
- Add shape methods for colouring regions of a map

# Version 1.0

**Release date**: 24 February, 2016

- Plot geographical data on a map with the simplest of commands.
- Uses iNZightPlots for the base layouts, and only modifies the internal plots.
- Can currently handle coordinate and country data.
