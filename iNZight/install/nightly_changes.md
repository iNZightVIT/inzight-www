* refactor of the Aggregate Data functionality, allowing users to select more than three variables and to perform aggregation over a subset of variables
* fix bug when setting new data object causing code history and data's new name to be lost
* NEW: better handling of survey designs using our new 'Survey design specification' format. This allows users to load pre-configured surveys from a single 'specification' file, while may optionally point at a dataset for an all-in-one import.
* when loading a new data set, exisiting datasets are kept (previously they were all removed; at this point I don't know why that design decision was made ...)
* allow user to delete any dataset (including the original); the previous dataset is loaded in it's place
* Join data now allows users to select an existing dataset, in addition to importing a new one (#340, @tmelliott)
* survey 'data wrangling' support for almost all operations (others have been greyed out to prevent invalid actions by users); code is valid, using 'srvyr' package to provide 'dplyr'-like syntax for survey designs
* updated preferences window to allow new options to be added in future without getting cluttered
* user preferences are are now stored in `tools::R_user_dir()`; user is prompted to create config directories
* enable code tidying (which uses the 'styler' package)
* fix small bug in code writing where colon (:) remained in list of packages for installation (#352, @tmelliott)
* add close_module method so modules can close themselves and iNZight's main GUI will be restored correctly
* create new 'Form Class Intervals' window connecting to `iNZightTools::form_class_intervals()` function; includes code and a much smoother intervace, with preview of resulting intervals

