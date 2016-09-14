# iNZight doesn't recognise my time variable {#no-valid-time-variable}

If your time variable is not in the format the program recognises, then you have to supply the time-structure information through the module's command window.

- Click __Provide Time Information__ and then press __CREATE__

- In __Start Date__, enter the year in which the series started

- In __Frequency__, enter the number of seasons in a year (e.g., 12 for monthly data)

- In __Season Number__, enter the number of the season at which the series started (e.g., `3` for March if using monthly data)



# My data is hourly, daily, or weekly -- how do I tell iNZight? {#daily-data}

iNZight currently doesn't have an automatic method for reading hourly, daily, or weekly time data, however you can [manually provide the information](#no-valid-time-variable). For hourly (see 1 below), daily (see 2 below) or weekly (see 3 below)

__1. To do this for hourly data__, use the following values for the Provide Time Information window:
-	__Start Date__: set this to 1 (or, if you have hourly data starting at, say, 7 am, enter 7, etc.)*
-	__Season Number__: the number of the hour-of-the-day you start in (e.g., 1 = 1 am, 5 = 5 am, 24 = 12 pm etc)**
-	__Frequency__: set this to 24 (for all hours of the day), or 8 (if you only go by standard working hours)

*This assumes your cycle is over all 24 hours of the day; if you prefer an 8 hour daily (or otherwise) cycle, you'll need to make sure to adjust the frequency accordingly.

**There's no reason for the hours of a day to start at 1 am; if you prefer cycles to run 8 am to 7 am the next day, then just remember that 1 = 8 am (so, if your first observation is from 10 am, you want to set season number = 2, etc.).

__2. To do this for daily data__, use the following values for the Provide Time Information window:
-	__Start Date__: set this to 1 (or, if you have daily data starting on, say, Friday, enter 5, etc.)*
-	__Season Number__: the number of the day-of-the-week you start in (e.g., 1 = Monday, 5 = Friday, etc)**
-	__Frequency__: set this to 7 (for all days of the week), or 5 (if you only go by weekdays)

*This assumes your cycle is over days of the week; if you prefer a fortnightly (or otherwise) cycle, you'll need to make sure to adjust the frequency accordingly.

**There's no reason for the days of a week to start on "Monday"; if you prefer cycles to run Sunday to Saturday, then just remember that 1 = Sunday (so, if your first observation is from a Tuesday, you want to set season number = 3).
NOTE: "years" will not exist; if you have daily observations over several years, the week numbers will continue to increase beyond 52.

__3. To do this for weekly data__ is not simple as there is not an exact number of full weeks in any given year. If time series data comprises weekly observations you need to assume that there are 52 weekly observations per year.
-	__Start Date__: set this to 1 (or, if you have weekly data starting at, say, the 7th week of the first year, enter 7, etc.)
-	__Season Number__: the number of the week-of-the-year you start in, usually 1.
-	__Frequency__: set this to 52 (for all weeks of the year), or some lesser number if you only count working weeks for an enterprise that closes for a fixed period (say 4 weeks) each year.

