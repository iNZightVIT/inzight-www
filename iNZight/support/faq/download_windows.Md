
# I don't understand zip files and don't know what to do with know what to do with iNZightVIT-latest-zipfile

This video shows how to drag the iNZightVIT folder (the one we want to use) out of iNZightVIT-latest-zipfile<br> 
https://www.youtube.com/embed/7Lh1Uo8CzSs


# I'm getting the error: 'Windows cannot find 'prog_files/bin/i386/Rgui.exe'. Make sure you typed the name correctly, and then try again.'

This is typically due to permissions on the computer. Often, iNZight will not be allowed to run from the Desktop. Instead, you can copy the __iNZightVIT__ folder to somewhere on the __C:/__ drive and run it from there.

If you still see the error message, you can try running iNZight from a USB stick (simply copy the folder to one and run from there).

Failing this, you may need to follow one of the options below.


# I can't get iNZight to run, even from a memory stick!

If you are using an institutionally-owned computer, it may have overly high security settings which are preventing iNZight from running. To allow iNZight to run, you will need to ask an administrator to:

- Place the __iNZightVIT__ folder inside __Program Files__
- Create a shortcut to __START_iNZightVIT.bat__ on the desktop

You can use this shortcut to start iNZight.


# My school disables `.bat` files; how can I make iNZightVIT available to students?

- Create a shortcut to `prog_files\bin\i386\Rgui.exe` for them to use to fire up `R`
- They will then have to paste the following into the R console window:
```
library(vit)
iNZightVIT()
```
- When students etc want to find iNZight's data folder, they will have to click on the `iNZightVIT` tab at the top of the browse navigation panel
