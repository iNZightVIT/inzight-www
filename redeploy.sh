#!/bin/sh

TAG=$(git describe --tags `git rev-list --tags --max-count=1`)

cd /home/bitnami/inzight-www
/opt/bitnami/git/bin/git fetch
/opt/bitnami/git/bin/git checkout origin $TAG
