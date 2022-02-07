## iNZightModules 2.5.7

- Implement new plot methods from 'iNZightRegression' (`inzplot()`)

## iNZightModules 2.5.6

- [Model Fitting] add extra button to plot toolbar in popout mode to bring (back) up model output window
- Update package dependency versions

## iNZightModules 2.5.5

- hide the Code Panel in modules (unless they specify they support it)
- use new `close_module()` method from GUI rather than doing so manually (this automatically restores things, too)
- add Marginal Model Plots to list of residual plots

## iNZightModules 2.5.4

- fix issues with specifying time information for annual data

## iNZightModules 2.5.3

- ask user to create module directory if it doesn't exist
- Model Fitting: add negative binomial

## iNZightModules 2.5.2

- fix bug in detecting time variables - now parses each column to determine if it is readable as an iNZight time variable

## iNZightModules 2.5.1

- fixes a bug in model fitting where no variables showed up when data has only two columns

# iNZightModules 2.5

### New features

- iNZight Module Manager to add, update, and remove addons from
  our repository, a URL, or a local file

### Other changes

- specify `stringsAsFactors = TRUE` for upcoming R 4.0.0
- fix 3d plot's "locate" functionality
- disabled Summary button in Multiple Response when two subsetting variables selected (this is not available)
- [model fitting] enable users to remove intercept from the model

## iNZightModules 2.4.9

- change default value of the time series smoother to 15 (was 10)
- add-on management system

## iNZightModules 2.4.8

**Release date**: 11 November 2019

- add checkbox to control smoother display
- addon modules now available (as a developmental feature)

## iNZightModules 2.4.7

**Release date**: 13 August 2019

- fixes AIC and BIC output for comparing regression models (including BIC for [nested] survey models)
- factor comparisons returns pairwise comparison matrix (with estimates, CIs, and [adjusted] p-values)
- add in dot density plot option for iNZightMaps

## iNZightModules 2.4.6

**Release date**: 15 July 2019

- time series module allows you to specify sub-series to plot or use in forecast model
- fix calling of AIC and BIC functions in modelling module

## iNZightModules 2.4.5

**Release date**: 30 April 2019

- initialize testing using testthat (for model fitting module)
- add travis, appveyor, and covr for continuous integration
- add View to menubar to allow reopening of closed windows (e.g., model output)
- add option to switch between logit and probit link function in binary regression
- add model comparison section (limited to AIC and BIC, for now)

## iNZightModules 2.4.4

**Release date**: 01 February 2019

Model Fitting:

- use survey design object in regression module
- confounding variables not displayed in call, y ~ x
- code writing include temporary model for plots-only
- create & rename models (hopefully) easier to use (buttons [de]activate)
- menu changes to be context specific to the module (currently not much happening)

Maps:

- use base iNZight interact button
- add interactive plot button to location maps

General:

- update module window API to add scroll window, title, footer to improve cross-module consistency

## iNZightModules 2.4.3

**Release date:** 07 January 2019

- revert to single landing window for both maps submodules

## iNZightModules 2.4.2

**Release date:** 21 November 2018

- minor changes to GUI defaults
- "Percentiles" replaces "Ranks" (underlying method exactly the same)
- fixes for UI, etc.

## iNZightModules 2.4.1

**Release date:** 15 November 2018

- update available map types after switching from Google to Stamen maps
- remove zoom feature until it is reimplemented for stamen maps
- add scrollbars to lat/lon UI to prevent window resizing

# iNZightModules 2.4

**Release date**: 14 August 2018

## Major changes

- updated maps module UI for lat/lon data
- Add to Plot features now implemented in maps

## Changes/Fixes

- many additions and fixes to the shapes maps module
- removed some redundant code from timeseries and modelfitting modules

## iNZightModules 2.3-1

**Release date:** 12 February 2018

- fix bugs in time series modules for annual data and manual time specification

# iNZightModules 2.3

**Release date**: 23 January 2018

### Beta release: New **Maps** module for plotting geographic regional data

The new maps module is an overhaul of the previous one, with much more control
over maps and options for graphs.

### Minor Changes

- **Time series**: now using `ggplot2` for several of the graphs.

## iNZightModules 2.2.0-3

**Release date:** 20 October 2017

- \[TS Module\] display error message when time series is missing values (or fails some other way)

## iNZightModules 2.2.0-2

**Release date:** 25 August 2017

- code history for model fitting module
- more bug fixes

## iNZightModules 2.2.0-1

**Release date:** 23 August 2017

- bug fixes: bootstrapping, residual plots
- better handling of errors
- extra features, etc

# Version 2.2

**Release date**: 18 August, 2017

### BETA RELEASE: New + Improved _Model Fitting_ module

As we have done with the Multiple Response and Time Series modules,
we've completely redesigned the interface for model fitting with iNZight.

- More intuitive user experience
- Responsive modelling: summary and plots of fitted models are provided as you build them
- ... and more to come!

**Please note**: that this _is_ a beta release, and therefore expect some things to not work.
Let us know what you did to break it so we can fix it, or if there's anything else you'd like to see,
or not see, just let us know!

## iNZightModules 2.1.1

**Release date:** 02 June 2017

- Fix updatePlot return value so it works with `iNZightPlots`'s `exportXXX()` functions

# iNZightModules 2.1

**Release date**: 23 March, 2017

- Release of newly designed Time Series module. All the usual features, but a far nicer interface, and a smoothness-slider!

## iNZightModules 2.0-2

**Release date:** 23 September 2016

- Catch fatal errors in trying to guess TS information

## iNZightModules 2.0-1

**Release date:** 05 September 2016

- Fix depreciation of `add3rdmouseButtonDropMenu` to `addRightclickDropMenu` in `gWidgets2` package.

# iNZightModules 2.0

**Release date**: 11 July, 2016

- Redesigned Multiple Response Module
- Redesigned Maps module
- Change how module dependencies are imported (using `::`)

# iNZightModules 1.2

**Release date**: 25 August, 2015

- Import entire `iNZightTools` package

# iNZightModules 1.1

**Release date**: 22 April, 2015

- Updated to conincide with the release of iNZight version 2.1.

## iNZightModules 1.0.8

**Release date**: 18 March, 2015

- fix a bug where iNZightTS wasn't being imported properly

## iNZightModules 1.0.7

**Release date**: 23 February, 2015

- remove `RGL` from `NAMESPACE` completely

## iNZightModules 1.0.6

**Release date**: 4 February, 2015

- fix an issue where RGL causes R on some Windows 8 machines to crash

## iNZightModules 1.0.5

**Release date**: 27 November, 2014

- add scrollbars to Time Series window if it doesn't fit on
  the screen

## iNZightModules 1.0.4

- along with change in iNZightTS, allow x-label on more plots

## iNZightModules 1.0.3

### New Features

- the pairs plot, or scatter plot matrix, now takes a grouping variable.
- 2-variable explore plots in the Quick Explore menu

### Minor Changes

- Changes to the time series module to allow specification of
  multiplicative time series models.
- Add y-axis label functionality.

## iNZightModules 1.0.2

- the pairs/scatter plot matrix draws a jittered dotplot rather than a
  barcode plot.

## iNZightModules 1.0.1

- Minor changes in package information and structure.

# iNZightModules 1.0

This is the first release of this package, although it was previously
bundled inside the iNZight package.

### Major Changes

- The model fitting module

  - Rewritten in `gWidgets2`
  - Allows users to specify general linear models, and survey
    designs for analysis of survey data.
  - Users can change the data type from numeric to categorical, and vice verca.
  - Confounding variables can be specified separately.
