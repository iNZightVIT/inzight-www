__Note__: iNZight expects spreadsheet-like data in which the first row of cells contains the _names_ of variables and everything in the column beneath a variable name is data recorded on that variable.


# iNZight won't read my data (at all) {#data-wont-read}

Open your data file in Excel (or similar) and save it in `csv` (comma separated values) format.
Make sure the saved file has a `.csv` extension at the end of its name.


# iNZight isn't reading my data properly {#data-read-incorrectly}

- If, when you look at the spreadsheet inside iNZight it has too many rows or columns:

  The cause is something strange in your data file (e.g., a cell with a space character in it).

  Open your file in Excel (or similar), copy and paste just the relevant block of rows and columns into a new spreadsheet and save that as a new `.csv` file.

- If, when you drop the variable name in Slot 1 you expect a dot plot and get something else:

  It is trying to draw a bar chart because it thinks the variable is categorical. The cause will be a non-numeric character somewhere in the column. This sometimes happens, for example when the data originates from an Excel file, is typed "General" rather than "Number" and has a comma as in 12,346. It will be saved into csv or read into iNZight as the character string "12,346" rather than the number 12346. Dates can also become character strings.

  You will need to open the file in Excel (or similar) and change the type of the column to "Number".

- __hashtags (&#35;)__: iNZight treats this as a _comment character_; this means that __any text on a line after a hashtag will be ignored__.

  You can add additional information to a dataset at the top (or anywhere you like) by prefixing the line with a hashtag:
  ```
 # this is an example data set with comments. You may wish to describe your variables.
 # Variable1 is a letter; variable2 is a number; variable3 is either 'yes' or 'no'
 # you can have as many comments as you like
variable1,variable2,variable3
A,3,yes
B,2,no
...
  ```
  __Important__: this also means that you cannot use a hashtag in any of the values.
  Take the following example:
  ```
name,favourite_movie,year,genre
jack,the public enemy,1931,crime/drama
david,public enemy #2,1993,comedy
  ```
  The second row of data will ignore everything after the &#35;, so the year and genre will show up as missing values.


# When I load a `.csv`, it just get strings of text `'gender;age;region'` rather than columns {#incorretly-formatted-data}

Assuming you saved the file yourself using Excel, there are two situations where this is an issue:

- __If you live in Europe, or a country that uses the comma (`,`) as a decimal symbol__ you will need to go to __Formats__ > __Additional settings__ (in Excel) and

  1. change the __Decimal symbol__ to a period (`.`), and
  2. change the __List separator__ to a comma (`,`).

- __If you live in a country that uses the period (`.`) as a decimal symbol__, Excel may be set up to symbol that isn't a comma.

  In this case, in Excel go to __Formats__ > __Additional settings__, and change the __List separator__ to a comma (`,`).

<div class="note">NOTE: You may need to click in the box and type the symbol using the keyboard if the option isn't in the dropdown list.</div>


# MAC: I can load data, but it shows up as unreadable text in the window {#file-encryption-issues}

There are two possible causes of this.

- The file encoding for the file is not what iNZight expects. This can happen if you save a file using a computer in a language other than english. One potential fix for this is to open the file in Numbers, and export as a .csv, which can then be loaded into iNZight.

- Alternatively, it may be a problem with the GTK+ installation on Macs. The only known solution so far is to reinstall GTK, restart, and try running iNZight again.
  The easiest way to do this is to run the installer again.

  If you would rather not (it can take a while, I know), then:

  1. Download the appropriate version of GTK for your computer, and install it:

      - Mac OS X 10.9 or later:
        [GTK+ 2.24.17](http://r.research.att.com/libs/GTK_2.24.17-X11.pkg)

      - Mac OS X 10.8 or earlier:
        [GTK+ 2.18.5](http://r.research.att.com/libs/GTK_2.18.5-X11.pkg)

  2. __Restart your computer__ and try iNZight again


# Notes of Special Characters {#special-characters}

# "View Data Set" is greyed out/disabled {#view-datset-disabled}

__View Data Set__ is not just a display. It has editing capabilities as well.  When the data set gets too large it slows the program down unacceptably. So we disable it when the dataset has more than about 200,000 cells.  You can still view the data set using __Dataset > View full dataset__.
