- enable automatic detection of delimited file separator (using `readr::read_delim`) (#401)
- Paginate dataset summary to prevent `skimr::skim()` freezing GUI when number of variables in the dataset is large
- New 'GTag' and 'GTags' classes for labels with a background and a collection of droppable labels, respectively
- add search button/clear button to search group (in data view widget)
- iNZDocument class uses global option `inzight.default.par` to override the default values for any `iNZightPlots::inzpar()` settings

**Interface changes**

- new preference to switch between single (normal) and multiple primary variables

**Data dictionaries**

- add capability to import a data dictionary (and apply to the active data, where possible)
- View Data Dictionary window to view and explore data dictionary definitions, etc

