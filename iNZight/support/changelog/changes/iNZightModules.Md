# Version 2.0
__Release date__: 11 July, 2015

## Major Changes

- Redesigned Multiple Response Module
- Redesigned Maps module
- Change how module dependencies are imported (using `::`)


***
# Version 1.2
__Release date__: 25 August, 2015

## Bug Fixes

- Import entire `iNZightTools` package


***
# Version 1.1
__Release date__: 22 April, 2015

Updated to conincide with the release of iNZight version 2.1.


***
# Version 1.0.8
__Release date__: 18 March, 2015

## Bug Fixes

- fix a bug where iNZightTS wasn't being imported properly


***
# Version 1.0.7
__Release date__: 23 February, 2015

## Bug Fixes

- remove `RGL` from `NAMESPACE` completely


***
# Version 1.0.6
__Release date__: 4 February, 2015

## Bug Fixes

- fix an issue where RGL causes R on some Windows 8 machines to crash


***
# Version 1.0.5
__Release date__: 27 November, 2014

## Minor Changes

- add scrollbars to Time Series window if it doesn't fit on
  the screen


***
# Version 1.0.4

- along with change in iNZightTS, allow x-label on more plots


***
# Verson 1.0.3

## New Features

- the pairs plot, or scatter plot matrix, now takes a grouping variable.
- 2-variable explore plots in the Quick Explore menu

## Minor Changes

- Changes to the time series module to allow specification of
  multiplicative time series models.
- Add y-axis label functionality.


***
# Version 1.0.2

## Minor Changes

- the pairs/scatter plot matrix draws a jittered dotplot rather than a
  barcode plot.


***
# Version 1.0.1

- Minor changes in package information and structure.


***
# Version 1.0

This is the first release of this package, although it was previously
bundled inside the iNZight package.

## Major Changes

- The model fitting module

  - Rewritten in `gWidgets2`
  - Allows users to specify general linear models, and survey
  	designs for analysis of survey data.
  - Users can change the data type from numeric to categorical, and vice verca.
  - Confounding variables can be specified separately.
