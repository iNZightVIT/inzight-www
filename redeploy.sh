#!/bin/sh

cd /home/bitnami/inzight-www
/opt/bitnami/git/bin/git fetch

TAG=$(git describe --tags `git rev-list --tags --max-count=1`)
/opt/bitnami/git/bin/git checkout $TAG

# any changes to webhook.service
cp webhook.service /lib/systemd/system/
cp /lib/systemd/system/webhook.service /etc/systemd/system/webhook.service
chmod 644 /etc/systemd/system/webhook.service
systemctl daemon-reload
systemctl restart webhook.service
