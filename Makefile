push:
	sudo rsync -av --delete iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

pull:
	sudo rsync -av --delete tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight

Npush:
	sudo rsync -anv --delete iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

Npull:
	sudo rsync -anv --delete tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight


fixPermissions:
	sudo chmod -R 775 .
