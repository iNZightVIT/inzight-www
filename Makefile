push:
	sudo rsync -av --delete iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/newSite/iNZight

pull:
	sudo rsync -av --delete tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/newSite/iNZight/ iNZight