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

for (pkg in pkgs) {
    # download NEWS.md -> iNZight/support/changelog/changes/{pkg}.Md
    url <- sprintf("https://raw.githubusercontent.com/iNZightVIT/%s/master/NEWS.Md", pkg)
    file <- sprintf("iNZight/support/changelog/changes/%s.Md", pkg)
    download.file(url, file, quiet = TRUE)
}
