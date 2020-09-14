f <- "website/iNZight/assets/objects/setup.php"
s <- readLines(f)
lv <- grep("$inzight_version", s, fixed = TRUE)
ld <- grep("$release_date", s, fixed = TRUE)

source("get_website_version.R")

s[lv] <- sprintf(gsub("\".+\"", "\"%s\"", s[lv]), VERSION)
s[ld] <- sprintf(gsub("\".+\"", "\"%s\"", s[ld]),
    format(as.Date(DESC[,"Date"]), "%e %B %Y")
)

writeLines(s, f)
