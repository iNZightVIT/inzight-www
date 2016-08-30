library(iNZightPlots)

#cas500 <- read.csv("~/iNZight/data/Census at School-500.csv", header = TRUE, comment.char = "#")
#gmdata <- read.csv("~/iNZight/data/Gap Minder Data.csv", header = TRUE, comment.char = "#")

data("gapminder", package = "FutureLearnData")

## Main Image

png(width = 1080/2, height = 760/2)
for (year in levels(gapminder$Year_cat)) {
    iNZightPlot(y = LifeExpectancy, x = log10(IncomePerPerson), cex = 0.6,
                g1 = Year_cat, g1.level = year,
                sizeby = Populationtotal, col = Region, alpha = 0.6, data = gapminder,
                varnames = list(x = "log10(Income)", y = "Life Expectancy"),
                xlab = expression(log[10](Income)))
}
dev.off()
f <- "~/iNZight/inzight-www/iNZight/img/feature.gif"
unlink(f)
fs <- list.files(".", pattern = ".png")
system(paste("convert",
             paste(c(paste("-delay 100", fs[1]),
                     paste("-delay 10", fs[-c(1, length(fs))]), 
                     paste("-delay 100", tail(fs, 1))), collapse = " "),
             f))
#system(paste("convert -delay 30 Rplot*.jpeg", f))
unlink("Rplot*.png")

png(width = 1080, height = 760)
for (year in levels(gapminder$Year_cat)) {
    iNZightPlot(y = LifeExpectancy, x = log10(IncomePerPerson),
                g1 = Year_cat, g1.level = year,
                sizeby = Populationtotal, col = Region, alpha = 0.6, data = gapminder,
                varnames = list(x = "log10(Income)", y = "Life Expectancy"),
                xlab = expression(log[10](Income)))
}
dev.off()
f <- "~/iNZight/inzight-www/iNZight/img/feature-large.gif"
unlink(f)
fs <- list.files(".", pattern = ".png")
system(paste("convert",
             paste(c(paste("-delay 100", fs[1]),
                     paste("-delay 10", fs[-c(1, length(fs))]), 
                     paste("-delay 100", tail(fs, 1))), collapse = " "),
             f))
#system(paste("convert -delay 30 Rplot*.jpeg", f))
unlink("Rplot*.png")



### Basic plotting
## Gap Minder data, univariate plots of `ChildrenPerWoman` subset by `Leap.Year` and then `Country`

iNZightPlot(Children.per.Woman, data = gmdata)
iNZightPlot(Children.per.Woman, g1 = Year, data = gmdata)
iNZightPlot(Children.per.Woman, y = Region, g1 = Year, data = gmdata)
for (year in levels(gmdata$Year)) {
    iNZightPlot(Children.per.Woman, y = Region, g1 = Year, g1.level = year, data = gmdata)
    Sys.sleep(0.1)
}


## Gap Minder data, bivariate plot of GDP against Life Expectancy, by year, region, population

iNZightPlot(log10(GDP.per.Capita), Life.Expectancy, g1 = Year, colby = Region, trend = "linear", data = gmdata)

for (year in levels(gmdata$Year)) {
    iNZightPlot(log10(GDP.per.Capita), Life.Expectancy, g1 = Year, g1.level = year,
                xlab = "Log10.Income", ylab = "Life Expectancy",
                colby = Region, sizeby = Population, alpha = 0.6, trend = "linear", data = gmdata)
    Sys.sleep(0.1)
}


## NHANES:
