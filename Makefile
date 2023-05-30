push:
	sudo rsync -rlv \
		--delete \
		--exclude "downloads" \
		--exclude "OLD" \
		--exclude "TESTING" \
		--chmod=D775,F664 \
		--chown=tell029:62215 \
		iNZight/ \
		tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight

pull:
	sudo rsync -rlv \
		--delete \
		--exclude "downloads" \
		--exclude "OLD" \
		--exclude "TESTING" \
		tell029@login02.fos.auckland.ac.nz:/mnt/tell029/web/homepages.stat/inzight-www/iNZight/ \
		iNZight

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


# buildserver:
# 	@sudo docker build -t inzight-server .

startserver:
	@sudo docker run -d --rm \
		--name inzight \
		-p 80:80 \
		-v "$$PWD"/iNZight:/var/www/html \
		php:7.1-apache

stopserver:
	@sudo docker stop inzight

sass:
	@node-sass --watch iNZight/styles -o iNZight/css
