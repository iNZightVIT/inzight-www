# iNZight doesn't recognise my time variable {#no-valid-time-variable}

If your time variable is not in the format the program recognises, then you have to supply the time-structure information through the module's command window.

- Click __Provide Time Information__ and then press __CREATE__

- In __Start Date__, enter the year in which the series started

- In __Frequency__, enter the number of seasons in a year (e.g., 12 for monthly data)

- In __Season Number__, enter the number of the season at which the series started (e.g., `3` for March if using monthly data)



# My data is daily, how do I tell iNZight? {#daily-data}

iNZight doesn't have any automatic method for reading daily time data, however you can [manually provide the information](#no-valid-time-variable).

To do this, use the following values for the __Provide Time Information__ window:
- __Start Date__: set this to 1 (or, if you have daily data starting in, say, week 5, enter 5, etc.)*
- __Frequency__: set this to 7 (for all days of the week), or 5 (if you only go by weekdays)
- __Season Number__: the number of the day-of-the-week you start in (e.g., 1 = Monday, 5 = Friday, etc)**

*This assumes your cycle is weekly; if you prefer a fortnightly (or otherwise) cycle, you'll need to make sure to adjust the frequency accordingly.

**There's no reason for weeks to start on "Monday"; if you prefer cycles to run Sunday to Saturday, then just remember that 1 = Sunday (so, if your first observation is from a Tuesday, you want to set season number = 3).

NOTE: "years" will not exist; if you have daily observations over several years, the week numbers will continue to increase after 52.
