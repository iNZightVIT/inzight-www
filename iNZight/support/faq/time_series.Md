# iNZight doesn't recognise my time variable {#no-valid-time-variable}

If your time variable is not in the format the program recognises, then you have to supply the time-structure information through the module's command window.

- Click __Provide Time Information__ and then press __CREATE__

- In __Start Date__, enter the year in which the series started

- In __Frequency__, enter the number of seasons in a year (e.g., 12 for monthly data)

- In __Season Number__, enter the number of the season at which the series started (e.g., `3` for March if using monthly data)



# My data is hourly, daily, or weekly -- how do I tell iNZight? {#daily-data}

iNZight currently doesn't have an automatic method for reading hourly, daily, or weekly time data, however you can [manually provide the information](#no-valid-time-variable). For hourly (see 1 below), daily (see 2 below) or weekly (see 3 below)

__1. To do this for hourly data__, use the following values for the Provide Time Information window:
-	__Start Date__: set this to 1*
-	__Season Number__: the number of the hour-of-the-day of the first observation
  (e.g., if you have 24 observations per day, with the first observation at 8am,
  set this to 8).
-	__Frequency__: set this to 24 (for all hours of the day), or 8 (if you only go by standard working hours)

*if it makes sense for the data not to start on the first day, you can adjust the start date.
For example, if you have hourly data for the month of March, but the data starts on the 2nd,
set start date to 2.


__2. To do this for daily data__, use the following values for the Provide Time Information window:
-	__Start Date__: set this to 1*
-	__Season Number__: the number of the day-of-the-week of the first observation
  (e.g., if you have a weekly cycle with 7 days per week, and the first observation is on a Tuesday,
  set this to 2 if you want weeks to start on a Monday)
-	__Frequency__: set this to 7 (for all days of the week), or 5 (if you only go by weekdays)

*if it makes sense for the data not to start on the first week (or whatever your chosen cycle is),
you can adjust the start date.
For example, if you have daily data in weekly cycles for a year, but the data starts in the second week,
set the start date to 2.

NOTE: "years" will not exist; if you have daily observations over several years, the week numbers will continue to increase beyond 52.

__3. To do this for weekly data__ is not simple as there is not an exact number of full weeks in any given year. If time series data comprises weekly observations you need to assume that there are 52 weekly observations per year.
-	__Start Date__: set this to 1 (or, if you have weekly data starting at, say, the 7th week of the first year, enter 7, etc.)
-	__Season Number__: the number of the week-of-the-year you start in, usually 1.
-	__Frequency__: set this to 52 (for all weeks of the year), or some lesser number if you only count working weeks for an enterprise that closes for a fixed period (say 4 weeks) each year.
