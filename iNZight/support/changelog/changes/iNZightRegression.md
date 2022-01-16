## iNZightRegression 1.3.1

- add marginal model plots (from 'car') which are useful for `glm` objects

# iNZightRegression 1.3.0

- refactor plots using ggplot creating new method for `inzplot` (from iNZightPlots)
- removes some functions that aren't used by iNZightRegression, and are available in iNZightMR instead

## iNZightRegression 1.2.8

- add column for exponentiated estimates where appropriate
- add `exponentiate.cis` argument to `iNZightSummary` which replaces the CIs
  with exponentiated versions if appropriate (`FALSE` by default)
- factorComp() for survey GLMs includes Wald test for term effects (regTermTest())
- add summary method for Cox PH models


## iNZightRegression 1.2.7
__Release date__: 21 April 2020

- specify `stringsAsFactors = TRUE` for upcoming R 4.0.0
- fix bug in processing summary for models with `exlude`d variables

## iNZightRegression 1.2.6
__Release date__: 11 November 2019

- fix bug in regression summary causing interactions to fail


## iNZightRegression 1.2.5
__Release date__: 2 September 2019

- add parameter confidence limits to regression summary output
- add model comparison function (AIC, BIC)
- add `factorComp()` function to obtain adjusted pairwise comparisons of
  factor levels in a model


## iNZightRegression 1.2.4
__Release date__: 15 July 2019

- disable smoother for intercept-only models (`y ~ 1`)
- fix some issues with bootstrapping


## iNZightRegression 1.2.3
__Release date__: 30 April 2019

- display link function used in binomial regression fits
- suppress warnings from `loess()` calls


## iNZightRegression 1.2.2
__Release date__: 01 February 2019

- fix bug where residual plot for null model was painfully slow to draw


## iNZightRegression 1.2.1
__Release date__: 15 November 2018

- display baseline level for binary GLMs


## iNZightRegression 1.2.0-2
__Release date__: 02 October 2017

- fix bootstrapping algorithm
- summary of model with only confounding variables (i.e., "adjusted intercept")


## iNZightRegression 1.2.0-1
__Release date__: 25 August 2017

- remove NAs from qq-plot abline


# iNZightRegression 1.2
__Release date__: 23 August 2017

This isn't a hugely updated version, however fixing up a bunch of bugs
to make the Model Fitting module better (over on `iNZightModules`).


### Minor changes

- export a `Poly()` function, which is just a `poly()` function that supports `NA`s

### Bug fixes:

- catch errors in model bootstrapping so the rest of the plot still works
- use the `subset` argument to `lm` (via `update()`) to perform bootstraps, rather than the long-winded data-bootstrapping call-modifying version that was buggy
- fix up bootstrapping algorithms for QQ-plot and histogram arrays


## iNZightRegression 1.1.7
__Release date__: 18 August 2017

- various fixes, package maintenance


## iNZightRegression 1.1.6
__Release date__: 23 March 2017

- fix bootstrapping method for linear models


## iNZightRegression 1.1.5
__Release date__: 9 January 2017

- fix a bug preventing plots from drawing when provided a `glm` object


## iNZightRegression 1.1.4
__Release date__: 20 July 2015

### Minor Changes

- Adds an extra argument `use.inzightplots` to the
  plotting functions that allows users to enable/disable the use of
  them as desired. Currently, the default is `FALSE` as the
  latest version of `iNZightPlots` is incompatible with
  `iNZightRegression`.

### Bug Fixes

- added missed function and method exports


## iNZightRegression 1.1.3
__Release date__: 17 September 2014

### Bug Fixes

- on some graphics devices (e.g., RStudio) `grid.rect()` is not
  transparent; now enforces these to be transparent


## iNZightRegression 1.1.2
__Release date__: 4 April 2014

### Minor Changes

- Continuing on from previous update, the partial residual
  plots are now modified to make use of the `iNZightPlots` library
  if it is installed.


## iNZightRegression 1.1.1
__Release date__: 27 March 2014

### New Features

- Residual summary plots from `plotlm6` can now make use of
  the `iNZightPlots` graphics rather than the defaults. It requires
  the user to have `iNZightPlots` installed to work, but reverts to
  the old plots if it is not.

- In the new `grid` based plots, quantile smoothers are used
  rather than loess smoothers. This greatly increases efficiency
  when large data sets are analysed.

### Minor Changes

- Maximum sample size for drawing bootstraps implemented
  (currently at 4000), as over this they don't provide much
  information (this can be overridden by `showBootstraps = TRUE`).

- P-values for normality test are printed as "P < 0.001"
  rather than "P = 0".

## Bug Fixes

- Shapiro-Wilk test not used if sample size > 5000 (resulted in an error).


# iNZightRegression 1.1
__Release date__: 18 January 2014

### New Features

- Support for generalized linear models (GLMs) and `svyglm`
  objects from the `survey` package.

- Changes to the `iNZightSummary` output include:

  - Output now hides output of confounding
    variables through the `exclude` argument, and lists these at the
    top of the output.

  - Displays the type of fit (e.g., Survey / Generalized Linear / Model).

- The QQ-plot array has been replaced by a single plot with
  the parametric bootstrap data QQ-plots all on a single plot,
  overlaid by the QQ-plot of the true data (this was suggested by
  Thomas Lumley).

### Changes

- The Histogram Array has been rewritten using `grid`, and
  minimizes margin whitespace and draws simulated histograms in a
  different colour.

### Bug Fixes

- The bootstrap models functions have been re-written to
  account for the `design` option in survey GLMs, as well as the
  case when the GLM binomial response is SUCCESS / N.TRIALS. This
  caused errors in the `fit$model` that was previously being used.

- The bootstrap lines from `plotlm6` have been fixed so that
  they now work for `(svy)glm` objects. There is also an optional
  cut-off if the sample size becomes too small (which can be
  overridden by the `showBootstraps = TRUE|FALSE` argument.

- `factorMeans` and `adjustedMeans` have been enhanced to work with GLMs.


## iNZightRegression 1.0.2-20130913

- Initial support for generalized linear models (GLMs),
  including the `survey` package's `svyglm`.


## iNZightRegression 1.0.2-20130122

### New Features

- First release of new package. Contains model fitting subset
  used for the `iNZight` package.

- Added `histogramArray` and `qqplotArray` plots to show how
  residuals from a model compare to the residuals *generated* from
  that model.

- New margin of error calculation functions. Initially written
  by Danny Chang. Used for comparison between levels of a
  factor. `moecalc` has a few standard methods that can be used:
  `print`, `plot`, and `summary`. In addition, a `multicomp` method
  has been added which is a useful tabulation of multiple comparison
  output. Note however with `multicomp` that the p-values are
  currently *unadjusted*.

- New summary output, `iNZightSummary`. Includes several Changes
  compared to the R-base model summary output. These include the
  following:

  - Now showing the factor itself in the output, not just rows
    for coefficients for levels of the factor.

  - When a factor is included in a model, the summary output
    will show the name of the factor and show the p-value for the
    factor (based on Type-III sums of squares). This p-value is not
    affected by further use of the factor (i.e. in an
    interaction). Sometimes this p-value cannot be calculated
    (i.e. when there are unobserved factor level combinations) and the
    p-value will be omitted.

  - The baseline level of a factor is now shown, with an
    estimate of 0.

  - All p-value output for levels of a factor is indented to the
    right by two characters to distinguish it from being a level.

  - The output for each factor level is now just the level name
    and not the name of the variable concatenated with the level
    name. The level name is also indented by two characters, again to
    distinguish it from the variable itself.

  - Removing F-statistic and associated p-value as it's mostly
    useless. It only shows us whether nothing is correlated with the
    response variable, i.e. whether we're completely wasting our time.

  - Removed model call output and residual output. Replaced with
    "Model for:" (plus response name).

- Added a new `plot.lm` function. The main difference being that
  it includes bootstrapped smoothers in its output as well as the
  regular trend lines. Also includes plots based on the `s20x`
  package's `normcheck` function.

- Added partial residual plots. Most useful for determining
  whether the inclusion of a transformation of a variable is
  necessary. For example, adding a logged or polynomial explanatory
  variable to the model.

- Adding bootstrapped estimates to `iNZightSummary`. Accessed by
  calling the function with `method="bootstrap"`.

### Bug Fixes

- Using `loess` for smoothers instead of `lowess` (newer and more robust).
