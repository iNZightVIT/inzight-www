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
            unlist(
                lapply(pages[pages != "index"],
                    function(page) file.path(base_url, dir, page))
            )
        }
    )
)
