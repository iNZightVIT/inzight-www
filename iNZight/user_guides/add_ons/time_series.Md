# Time Series Analysis

Graphics for time series aimed at seasonal series.

Includes time series plots with smoothed trends, plots displaying seasonal decomposition, forecasting using Holt-Winters, and plots for comparing a set of series.

Caters for constant additive or multiplicative seasonal effects.

## Specifying the Time Structure

Users can supply time information to iNZight in one of two ways:
either by specifying an appropriately formatted variable,
or by manually telling iNZight about the structure.


### Supported Time Variables

iNZight's Time Series module can currently only read specially formatted variables to determine the time structure of a data set, and supports observations made over periods of a year (daily, weekly, monthly, quarterly, yearly observations), daily observations made over weeks, and hourly data made over days.

The following table shows the formula for these time variables (code letters in parentheses {} are optional)

| Period  | Frequency          | Code         | Examples                   | Notes       |
|:--------|:-------------------|:-------------|:---------------------------|:------------|
| Yearly  | Annual             | {Y}_yyyy_      | 1990, Y1990                |  |
|   | Quarterly          | {Y}_yyyy_<span></span>Q_qq_   | 1990Q01, Y1992Q01          | _qq_ can be 01-04 |
|   | Monthly            | {Y}_yyyy_<span></span>M_mm_   | 1990M01, Y1990M01          | _mm_ can be 01-12 |
|   | Weekly (7-days per week)* | {Y}_yyyy_<span></span>W_ww_   | 1990W01, Y1990W02          | _ww_ can be 01-52 |
|   | Daily              | {Y}_yyyy_<span></span>D_ddd_   | 1990D01, 1990D127, Y1990D001 | _dd_ can be 001-366 |
| Weekly  | Daily              | W_ww_<span></span>D_dd_ | W01D01, W125D07 | _dd_ can be 01-07 |
| Daily   | Hourly             | D_dd_<span></span>H_hh_ | D01H01, D184H23 | _hh_ can be 01-24 |

\* if your data has a period of 5 days per week, then you'll need to specify the time manually (see below).


### Manual Time Specification

If your data doesn't fit one of the above structures, or you don't want to manually create the variable,
you can easily specify the structure of your time series data by choosing "Provide Time Information".

* Use the table above to determine what the __period__ and __frequency__ of your data should be, and then choose the appropriate options from the drop downs.
* You can specify you own ("custom") frequency if it is not one of the common ones listed above; for example, if you have daily data over a period of __work weeks__ (Monday &ndash; Friday), set the frequency to 5.

## Additional Documentation

We have very little documentation ourselves, however
<a href="http://www.censusatschool.org.nz/" target="_blank">CensusAtSchool NZ</a>
has some
<a href="http://new.censusatschool.org.nz/resources/?nzc_level=-1&keyword=47&event=-1&auth=-1&year_added=-1&search=1" target="_blank">resources related to time series</a>.
