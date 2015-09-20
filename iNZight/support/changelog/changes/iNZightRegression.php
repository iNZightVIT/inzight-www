
<h2>Change Log for iNZightRegression</h2>

<div class='versionSection'><h3>Changes in version 1.1.4</h3>

<p>Release date: 20 July 2015
</p>


<h4>MINOR HANGES</h4>


<ul>
<li><p> added an extra argument <code>use.inzightplots</code> to the
plotting functions that allows users to enabled/disable the use of
them as desired. Currently, the default is <code>FALSE</code> as the
latest version of <code>iNZightPlots</code> is incompatible with
<code>iNZightRegression</code>.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> added missed function and method exports
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.1.3</h3>

<p>Release date: 17 September 2014
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> on some graphics devices (eg. RStudio) grid.rect() is not
transparent - now enforces these to be transparent
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.1.2</h3>

<p>Release date: 4 April 2014
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> Continuing on from previous update, the partial residual
plots are now modified to make use of the 'iNZightPlots' library
if it is installed.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.1.1</h3>

<p>Release date: 27 March 2014
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> Residual summary plots from 'plotlm6' can now make use of
the 'iNZightPlots' graphics rather than the defaults. It requires
the user to have 'iNZightPlots' installed to work, but reverts to
the old plots if it is not.
</p>
</li>
<li><p> In the new 'grid' based plots, quantile smoothers are used
rather than loess smoothers. This greatly increases efficiency
when large data sets are analysed.
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> Maximum sample size for drawing bootstraps implemented
(currently at 4000), as over this they don't provide much
information (this can be overridded by 'showBootstraps = TRUE').
</p>
</li>
<li><p> p-values for normality test are printed as &quot;P &lt; 0.001&quot;
rather than &quot;P = 0&quot;.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Shapiro Wilk test not used if sample size &gt; 5000 (resulted in an
error).
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.1</h3>

<p>Release date: 18 January 2014
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> Support for generalised lienar models (GLMs) and 'svyglm'
objects from the 'survey' package.
</p>
</li>
<li><p> Changes to the 'iNZightSummary' output include:
</p>

<ul>
<li><p> Output now hides output of counfounding
variables through the 'exclude' argument, and lists these at the
top of the output.
</p>
</li>
<li><p> Displays the type of fit (e.g., Suvey / Generalised Linear
/ Model).
</p>
</li></ul>

</li>
<li><p> The QQ-plot array has been replaced by a single plot with
the parametric bootstrap data QQ-plots all on a single plot,
overlaid by the QQ plot of the true data (this was suggested by
Thomas Lumley).
</p>
</li></ul>




<h4>CHANGES</h4>


<ul>
<li><p> The Histogram Array has been rewritten using 'grid', and
minimises margin whitespace and draws simulated histograms in a
different color.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> The bootstrap models functions have been re-written to
account for the 'design' option in survey GLMs, as well as the
case when the GLM binomial response is SUCCESS / N.TRIALS. This
caused errors in the 'fit$model' that was previously being used.
</p>
</li>
<li><p> The bootstrap lines from 'plotlm6' have been fixed so that
they now work for '(svy)glm' objects. There is also an optional
cut-off if the sample size becomes too small (which can be
overridden by the 'showBootstraps = TRUE|FALSE' argument.
</p>
</li>
<li><p> 'factorMeans' and 'adjustedMeans' have be fixed so they work
for GLMs.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.0.2-20130913</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> Initial support for generalised linear models (GLMs),
including the &lsquo;survey' package&rsquo;s 'svyglm'.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in version 1.0.2-20130122</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> First release of new package. Contains model fitting subset
used for the 'iNZight' package.
</p>
</li>
<li><p> Added 'histogramArray' and 'qqplotArray' plots to show how
residuals from a model compare to the residuals *generated* from
that model.
</p>
</li>
<li><p> New margin of error calculation functions. Initially written
by Danny Chang. Used for comparison between levels of a
factor. 'moecalc' has a few standard methods that can be used:
'print', 'plot', and 'summary'. In addition, a 'multicomp' method
has been added which is a useful tabulation of multiple comparison
output. Note however with 'multicomp' that the p-values are
currently *unadjusted*.
</p>
</li>
<li><p> New summary output, 'iNZightSummary'. Includes several changes
compared to the R-base model summary output. These include the
following:
</p>

<ul>
<li><p> Now showing the factor itself in the output, not just rows
for coefficients for levels of the factor.
</p>
</li>
<li><p> When a factor is included in a model, the summary output
will show the name of the factor and show the p-value for the
factor (based on Type-III sums of squares). This p-value is not
affected by further use of the factor (i.e. in an
interaction). Sometimes this p-value cannot be calculated
(i.e. when there are unobserved factor level combinations) and the
p-value will be omitted.
</p>
</li>
<li><p> The baseline level of a factor is now shown, with an
estimate of 0.
</p>
</li>
<li><p> All p-value output for levels of a factor is indented to the
right by two characters to distinguish it from being a level.
</p>
</li>
<li><p> The output for each factor level is now just the level name
and not the name of the variable concatenated with the level
name. The level name is also indented by two characters, again to
distinguish it from the variable itself.
</p>
</li>
<li><p> Removing F-statistic and associated p-value as it's mostly
useless. It only shows us whether nothing is correlated with the
response variable, i.e. whether we're completely wasting our time.
</p>
</li>
<li><p> Removed model call output and residual output. Replaced with
&quot;Model for:&quot; (plus response name).
</p>
</li></ul>

</li>
<li><p> Added a new 'plot.lm' function. The main difference being that
it includes bootstrapped smoothers in its output as well as the
regular trend lines. Also includes plots based on the 's20x'
package's 'normcheck' function.
</p>
</li>
<li><p> Added partial residual plots. Most useful for determining
whether the inclusion of a transformation of a variable is
necessary. For example, adding a logged or polynomial explanatory
variable to the model.
</p>
</li>
<li><p> Adding bootstrapped estimates to 'iNZightSummary'. Accessed by
calling the function with 'method=&quot;bootstrap&quot;'.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Using 'loess' for smoothers instead of 'lowess' (newer and
more robust).
</p>
</li></ul>




</div>
