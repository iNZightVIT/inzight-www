f <- "iNZight/assets/objects/setup.php"
s <- readLines(f)
lv <- grep("$inzight_version", s, fixed = TRUE)
ld <- grep("$release_date", s, fixed = TRUE)

# get DESCRIPTION file
r <- "https://r.docker.stat.auckland.ac.nz"
V <- available.packages(repos = r)["iNZight", "Version"]
url <- sprintf("%s/src/contrib/iNZight_%s.tar.gz", r, V)
t <- tempfile()
on.exit(unlink(t))
dir.create("pkg")
on.exit(unlink("pkg", TRUE, TRUE), add = TRUE)
download.file(url, t)
untar(t, exdir = "pkg")

DESC <- read.dcf("pkg/iNZight/DESCRIPTION")[1,]

s[lv] <- sprintf(gsub("\".+\"", "\"%s\"", s[lv]), DESC["Version"])
s[ld] <- sprintf(gsub("\".+\"", "\"%s\"", s[ld]),
    format(as.Date(DESC["Date"]), "%e %B %Y")
)

writeLines(s, f)
