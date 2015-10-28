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


# When I load a `.csv`, it just get strings of text `'gender;age;region'` rather than columns {#incorretly-formatted-data}

This is caused by incompatible default settings in European countries. Unfortunately, iNZight can only read files with comma (,) separators. In European countries, however, this is commonly used as the decimal separator (142,9), so the symbol used to separate values in the exported file is different (a period (.) or semicolon (;)).

To fix this, you will need to change the number format from a comma (142,9) to a period (142.9), and when you export as a `.csv`, make sure you tell it to use a comma (,) as the delimeter.


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
