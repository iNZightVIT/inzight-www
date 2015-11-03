# iNZight is running, but its very slow/laggy on Mavericks/Yosemite/El Capitan {#disable-appnap}

This is a problem caused by "App Nap". To disable this feature ... 
1. Find the __iNZightVIT__ folder (normally it would be inside Applications).
2. __Single-click__ the __iNZightVIT__ icon inside the iNZightVIT folder, and press __Command-I__ (that's i not L) on your keyboard. <br>
<sub> If your initial install was older there will not be a __iNZightVIT__ icon inside the iNZightVIT folder. Instead there will be a __R__ icon. Apply the instructions to that instead. <br>
3. In the Info window that opens, tick the box to __Prevent App Nap__. (If you don't see this option, it simply means your machine doesn't support Power Nap)

It should work the next time you start up iNZightVIT.

# I can't start iNZight after upgrading to OS X 10.10 Yosemite {#yosemite-update}

The latest update to the Mac operating system, 10.10 Yosemite, has moved some things around. For now, it looks like you will need to reinstall XQuartz, which can be downloaded [from here](http://xquartz.macosforge.org/downloads/SL/XQuartz-2.7.7.dmg).

Make sure you completely quit __R__ and __XQuartz__ before reinstalling XQuartz by __right-clicking__ their icons in the Dock and clicking on __Quit__.


# I can't find iNZight after using the Package installer {#locating-inzight}

The iNZightVIT package installer places iNZight in your __Applications__ folder by default.


# iNZightVIT doesn't load {#headerless-gtk}

There is a `R session is headless; GTK+ not initialized` message in the R console (just above `You have successfully loaded ...`)

1. __Reinstall__ the correct version of GTK+ by simply following the same install instructions as before

 - Mac OS X 10.9 or later:
   [GTK+ 2.24.17](http://r.research.att.com/libs/GTK_2.24.17-X11.pkg)

 - Mac OS X 10.8 or earlier:
   [GTK+ 2.18.5](http://r.research.att.com/libs/GTK_2.18.5-X11.pkg)

2. __Restart your mac__



# I've tried updating iNZight, but it doesn't work {#updating-inzight}

If you have an old version of iNZightVIT (2.0.2 or earlier) you may be unable to run the updater. For now, the only solution is to [download iNZightVIT](/getinzight.php?os=Mac) again.

If you have a newer version of iNZight (version 2.0.3 or later), then we would like to know your updater isn't working. Please [let us know here](/support/contact/), and for now you will need to download iNZight again to get the latest version.



# I'm getting error messages in the R console {#console-error-messages}

Especially in the Snow Leopard/Lion/Mountain Lion versions of iNZightVIT, there are a some error messages that may look scary. The only time you should worry about these is if you don't get the iNZight window opening.

If iNZight is not working, and you're getting error messages, copy them and [send us a bug report](/support/contact/) and we will get back to you as soon as possible.
