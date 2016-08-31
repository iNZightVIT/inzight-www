push:
	sudo rsync -av --delete --exclude "*.exe" --exclude "*.dmg" --exclude "*.zip" --exclude "*.pkg" --exclude "*.bz2" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

pull:
	sudo rsync -av --delete --exclude "*.exe" --exclude "*.dmg" --exclude "*.zip" --exclude "*.pkg" --exclude "*.bz2" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight

Npush:
	sudo rsync -anv --delete --exclude "*.exe" --exclude "*.dmg" --exclude "*.zip" --exclude "*.pkg" --exclude "*.bz2" iNZight/ tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

Npull:
	sudo rsync -anv --delete --exclude "*.exe" --exclude "*.dmg" --exclude "*.zip" --exclude "*.pkg" --exclude "*.bz2" tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ iNZight


fixPermissions:
	sudo chmod -R 775 .

nothing:
	sudo chmod 777 iNZight/newsletters/newmailer.Md
	sudo chmod 777 iNZight/newsletters/newMailerInfo.json
