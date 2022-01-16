pkgs <- c(
    "iNZight",
    "vit",
    "iNZightModules",
    "iNZightPlots",
    "iNZightMR",
    "iNZightMaps",
    "iNZightRegression",
    "iNZightTS",
    "iNZightTools"
)

install.packages("RCurl")

for (pkg in pkgs) {
    # download NEWS.md -> iNZight/support/changelog/changes/{pkg}.md
    url <- sprintf("https://raw.githubusercontent.com/iNZightVIT/%s/master/NEWS.md", pkg)
    if (!RCurl::url.exists(url)) url <- gsub("md$", "Md", url)
    file <- sprintf("iNZight/support/changelog/changes/%s.md", pkg)
    download.file(url, file, quiet = TRUE)
}
