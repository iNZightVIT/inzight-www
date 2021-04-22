dirs <- c(
    "basics",
    "interface",
    "file_options",
    "data_options",
    "variables",
    "plot_options",
    "add_ons",
    "advanced"
)

base_url <- "https://inzight.nz/user_guides"



pages <- unlist(
    lapply(dirs,
        function(dir) {
            cp <- file.path(dir, "contents.js")
            if (!file.exists(cp)) return()
            pages <- names(jsonlite::fromJSON(cp))
            c(
                file.path(base_url, dir),
                unlist(
                    lapply(pages[pages != "index"],
                        function(page) {
                            if (grepl("\\.php$", page))
                                file.path(base_url, dir, page)
                            else
                                paste0(file.path(base_url, dir), "?topic=", page)
                        }
                    )
                )
            )
        }
    )
)

dir.create("PDFguide")
counter <- 1L
for (page in pages) {
    system(
        sprintf("wkhtmltopdf --print-media-type --disable-external-links %s PDFguide/page%02d.pdf",
            paste(pages[counter], collapse = " "),
            counter
        )
    )
    counter <- counter + 1L
}

files <- list.files("PDFguide", full.names = TRUE)
system(sprintf("pdfunite %s iNZight_User_Guide.pdf", paste(files, collapse = " ")))

unlink("PDFguide", TRUE, TRUE)
