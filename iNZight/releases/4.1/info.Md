# iNZight 4.1

Kia ora koutou katoa!

The latest release features a major overhaul of iNZight's handling of survey designs, as well as several other significant user interface changes. Our focus has been on making iNZight a development tool for researchers to use on a wide range of data, specifically from survey designs, in a way that minimises specialist skills (such as understanding the underlying structure of the survey).

In addition, this release includes several much-needed interface redesigns of various components (details below) to make them more user friendly, and makes some fundamental changes to the inner workings in preparation for our upcoming release to CRAN. This will make iNZight available to research groups who may not be able to install the Desktop version on their organisation machines, but do have access to R and are able to install packages from CRAN.

For those interested, a detailed list of changes is given below, including changes made to several of the underlying packages used by iNZight.

As always, if you have any questions about these changes, run into problems, or would like to leave feedback of any kind, please get in touch! We now have several ways of doing so: you can find us on Twitter ([@iNZightUoA](https://twitter.com/iNZightUoA)), Facebook ([iNZight](https://facebook.com/inzightuoa), including live chat on our website), GitHub ([@iNZightVIT](https://github.com/iNZightVIT)), and e-mail ([inzight_support@stat.auckland.ac.nz](mailto:inzight_support@stat.auckland.ac.nz)).


Ngā mihi nui,

The iNZight Team.


***

**Acknowledgement**

This release has been made possible by support from [Te Rourou Tātaritanga](https://terourou.org), a research group based in Victoria University of Wellington, University of Auckland, and iNZight Analytics Ltd, and is funded by an MBIE Endeavour Grant, ref 62506 ENDRP. This funding support, as well as support from iNZight Analytics Ltd,  has allowed us to develop iNZight for use as a rapid research development tool with special emphasis on survey designs.


***

### Major changes

#### Surveys

* Vastly improved handling of survey designs using our new 'Survey design specification' format. This allows users to load pre-configured surveys from a single 'specification' file, which may optionally point at a dataset for an all-in-one import.
* Survey "data wrangling" support for almost all operations (others have been greyed out to prevent invalid actions by users). R history code is valid, using the 'srvyr' package to provide 'dplyr'-like syntax for survey designs.

#### Other

* Redesign of the 'Aggregate Data' interface, allowing users to select more than three variables and to perform aggregation over a subset of variables
* Join data now allows users to select an existing dataset, in addition to importing a new one
* Redesigned 'Preferences' window to allow new options to be added in future without getting cluttered
* Redesigned 'Form Class Intervals' window connecting to the new `iNZightTools::form_class_intervals()` function, which includes code and a much smoother interface with a preview of resulting intervals.

### Minor changes

* When loading a new data set, exisiting datasets are kept (previously they were all removed; at this point I don't know why that design decision was made ...).
* Users can now delete any dataset (including the original). The previous dataset is loaded in it's place.
* User preferences are are now stored in `tools::R_user_dir()`; user is prompted to create config directories.
* Better code tidying of R history script using the 'styler' package.
* The `disposeR` argument in `iNZight()` has been replaced with `dispose_fun`, allowing users to pass a function to be called when iNZight closes (rather then only allowing `q()`).
* Adds `close_module()` method so modules can close themselves and iNZight's main GUI will be restored correctly.

### Bug fixes

* When setting new data object, code history and data's new name are retained.
* Removes superfluous colon (:) from package install list in R history


**Plus many other fixes and changes from other iNZight packages!**



***

There are many other changes in several of the R packages used behind-the-scenes.

Changes that are visible to GUI users are in **bold**.


## iNZightModules (2.5.5)

* **Hides the Code Panel in modules that aren't set-up to use it.**
* **Adds Marginal Model Plots to list of residual plots options. This is particularly useful for examining GLM fits.**
* Uses new `close_module()` method from the iNZight GUI rather than doing so manually (this automatically restores things, too).

## iNZightRegression (1.3.1)

- Adds marginal model plot support (from 'car') which are useful for `glm` objects.

## iNZightPlots (2.13)

- **Only shows survey information (exclude the full call) in summary/inference.**
- **Fixes bug where plots failed if there we no non-missing x/y values in a subset.**
- **Fixes y-axis rendering of large values (now accounts for width of tick labels).**
- Replaces `inzsummary` and `inzinference` with S3 methods.
- Fixes an issue introduced by a change in the 'readr' package (uses 'hms' instead of 'time').

## iNZightTools

* Uses `srvyr` package to handle survey designs using `dplyr`-like syntax.
  * `aggregateData()`, `filterNumeric()`, `filterLevels()`, `filterRows()`, ...
* Removes redundant code from `filterLevels()` to make it more concise (using `droplevels()`).
* Adds method to convert survey design-like objects to iNZight's `inzsvyspec` format.
* Suppresses printing of dataset when joining data.
* Fixes bug where special characters in levels during `collapseLevels()` cause error.
* Adds new `form_class_intervals()` function.
* Updates `import_survey()` to handle URL as the data argument.
* Fixes bug in `reorderLevels(..., freq = TRUE)`.
