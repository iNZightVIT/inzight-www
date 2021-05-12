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
    url <- sprintf("https://raw.githubusercontent.com/iNZightVIT/%s/master/NEWS.*d", pkg)
    file <- sprintf("iNZight/support/changelog/changes/%s.md", pkg)
    download.file(url, file, quiet = TRUE)
}
