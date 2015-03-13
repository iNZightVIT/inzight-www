##require(devtools)
##install_github("iNZightVIT/iNZightPlots", ref = "new3")
library(cairoDevice)
Cairo()
library(iNZightPlots)

cas500 <- read.csv("~/iNZight/iNZightVIT-MAC/data/Census at School-500.csv", header = TRUE, comment.char = "#")
gmdata <- read.csv("~/iNZight/iNZightVIT-MAC/data/Gap Minder Data.csv", header = TRUE, comment.char = "#")


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
