[<i>These pages deal only with issues for the current version of iNZight (version 3). For issues with older versions, see the <a href="https://www.stat.auckland.ac.nz/~wild/iNZight_2016-08/support/faq/"> FAQ pages from the old website</a>.</i>]


# I can't get iNZight to work on macOS Catalina {#catalina}

Unforunately Apple have made some significant changes to the way software permissions are handled, which seems to be blocking some packages that iNZight depends on from running. We are currently unable to provide a solution, and are asking users to either use a Windows computer or the online version. We apologise for any inconveniences and are waiting for other developers to fix some issues before we can fix iNZight.


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

If iNZight is not working, and you're getting error messages, copy them and [send us a bug report](../contact/) and we will get back to you as soon as possible.
