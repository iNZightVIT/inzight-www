# Mac: VIT is very slow at drawing/resampling {#mac-slow-sampling}

On macOS, the default graphics device is __very slow__ at drawing,
which is particularly a problem in the VIT module when fast animations
are necessary. This means VIT has to wait for each frame to be processed
before it can move onto the next, which results in a very slow, laggy
animation.

To get around this, a much faster graphics device __should__ be used,
and in most cases this will be installed along with iNZightVIT.
This packaged is called [Acinonyx](https://www.rforge.net/Acinonyx/).
In some cases, however, it may not have been downloaded and therefore
unavailable for VIT to use.

1. First, try updating VIT by following the [update iNZightVIT instructions](../../user_guides/basics/?topic=update_inzight).
2. If that doesn't make a difference, check that the package is installed by pasting the following line into the R Console and pressing Enter:
```
library(Acinonyx)
```
If that gives you an error message, you will need to try installing it by pasting the following command into the R Console and pressing Enter:
```
install.packages("Acinonyx", lib = "/Applications/iNZightVIT/.library",
                     repos = "http://rforge.net)
```

If you're still unable to get VIT running to your liking,
please [email us with screenshots of VIT with the graphics window open](mailto:inzight_support@stat.auckland.ac.nz).
Include as much detail as possible, including macOS version and
R version, and any results from attempting the above instructions.
