push:
	fixPermissions
	sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" --exclude "TESTING" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight
	fixPermissions USER=$(whoami)
pushTest:
		sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/TESTING

pushA:
	sudo rsync -av --delete --exclude "downloads" --exclude "OLD" --exclude "TESTING" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

pull:
	sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" --exclude "TESTING" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight

Npush:
	sudo rsync -rlnv --delete --exclude "downloads" --exclude "OLD" --exclude "TESTING" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

Npull:
	sudo rsync -rlnv --delete --exclude "downloads" --exclude "OLD" --exclude "TESTING" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight


USER=$(shell whoami)
fixPermissions:
	-sudo chown -R $(USER) .
	-sudo chgrp -R 62215 .
	-sudo find . -type f -exec chmod 664 {} +
	-sudo find . -type d -exec chmod 775 {} +

nothing:
	sudo chmod 777 iNZight/newsletters/newmailer.Md
	sudo chmod 777 iNZight/newsletters/newMailerInfo.json
