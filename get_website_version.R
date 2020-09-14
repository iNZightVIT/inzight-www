DESC <- read.dcf("library/iNZight/DESCRIPTION")
VERSION <- DESC[,"Version"]
cat(VERSION)
