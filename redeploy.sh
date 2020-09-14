#!/bin/sh

# any changes to webhook.service
#

cd /home/bitnami/inzight-www
/opt/bitnami/git/bin/git fetch

TAG=$(git describe --tags `git rev-list --tags --max-count=1`)
/opt/bitnami/git/bin/git checkout $TAG
