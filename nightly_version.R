f <- "iNZight/assets/objects/setup.php"
s <- readLines(f)
lv <- grep("$nightly_version", s, fixed = TRUE)
ld <- grep("$nightly_date", s, fixed = TRUE)

# get NIGHTLY file ...
r <- "https://r.docker.stat.auckland.ac.nz"
V <- readLines(sprintf("%s/downloads/VERSION-nightly", r))
D <- strsplit(V, "\\.")[[1]][4]
D <- as.Date(D, format = "%Y%m%d")

s[lv] <- as.character(V)
s[ld] <- sprintf(gsub("\".+\"", "\"%s\"", s[ld]),
    format(D, "%e %B %Y")
)

writeLines(s, f)
