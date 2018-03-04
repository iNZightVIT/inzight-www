push:
	sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight
pushTest:
		sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/TESTING

pushA:
	sudo rsync -av --delete --exclude "downloads" --exclude "OLD" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

pull:
	sudo rsync -rlv --delete --exclude "downloads" --exclude "OLD" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight

Npush:
	sudo rsync -rlnv --delete --exclude "downloads" --exclude "OLD" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

Npull:
	sudo rsync -rlnv --delete --exclude "downloads" --exclude "OLD" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight


fixPermissions:
	-sudo chown -R tell029 *
	-sudo chgrp -R 62215 *
	-sudo find . -type f -exec chmod 755 {} +
	-sudo find . -type d -exec chmod 755 {} +

nothing:
	sudo chmod 777 iNZight/newsletters/newmailer.Md
	sudo chmod 777 iNZight/newsletters/newMailerInfo.json
