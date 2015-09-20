
<h2>NEWS file for the iNZightPlots package</h2>

<div class='versionSection'><h3>Changes in Version 2.2</h3>

<p>RELEASE DATE: 14 September 2015
</p>


<h4>NEW FEATURES - SURVEY DESIGN</h4>


<ul>
<li><p> confidence intervals for histograms and bar plots
</p>
</li>
<li><p> comparison intervals for histograms broken down by a factor
</p>
</li>
<li><p> summary information for all basic plots (histograms, bar plots, and scatter plots)
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> fixes a bug where missing information on barplots and scatter plots would cause the plotting function to die
</p>
</li>
<li><p> fixes a bug in the printing of summary objects
</p>
</li>
<li><p> fixes a bug where the minimum value of a single numeric variable summary was ommited
</p>
</li>
<li><p> and various other small bug fixes
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.1</h3>

<p>RELEASE DATE: 04 August 2015
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> allow zooming of plots with the new <code>zoom</code>
argument. Works for both univariate and bivariate plots, and a
related funcionality for 'zooming in' on bars in a barplot. 
</p>
</li></ul>




<h4>PATCH 2.1-1: 28 August 2015</h4>


<ul>
<li><p> fix a bug that occurs when all survey weights are equal
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0.6</h3>

<p>RELEASE DATE: 03 August 2015
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> fix an issue where requesting summary of 'dotplots' resulted
in creating a new device, which resulted in errors on the Shiny
server.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0.5</h3>

<p>RELEASE DATE: 27 July 2015
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> additional arguments 'xlim' and 'ylim' allow users to
specify the range of values shown on the plot
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> several issues for dotplots have been fixed
</p>
</li>
<li><p> weighting variable used when drawing a scatter plot of
survey data
</p>
</li>
<li> <p><code>conf</code> now corresponds to Year 12 intervals in dot plot
inferences (previously, <code>comp</code> corresponded to this interval)
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0.3</h3>

<p>RELEASE DATE: 01 July 2015
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> fix up the order of bars in segmented bar plots to
correspond to the legend
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0.2</h3>

<p>RELEASE DATE: 24 June 2015
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> remove facility where the colour-by variable is ignored if
there are 'too many' levels&mdash;this is now left up to users to
decide if colour by a particular variable makes sense of not.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0.1</h3>

<p>RELEASE DATE: 16 June 2015
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> Dotplot locating implemented using new methodology, with the
additional argument 'label.extreme = numeric(2)', allowing users
to specify how many lower and upper points to identify,
respectively.
</p>
</li>
<li><p> equivalently, extreme points (by using Mahalanobis'
distance) can be labelled on scatter plots using 'label.extreme =
numeric(1)'.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> fixed a small bug that stopped inference from working in
dotplots when 'x' is a factor and 'y' is the numeric variable.
</p>
</li>
<li><p> fix a bug that caused 'nbins = 0' in some cases.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 2.0</h3>

<p>Release Date: 26 May 2015
</p>


<h4>MAJOR CHANGES</h4>


<ul>
<li><p> The entire package has been rewritten to accomodate complex
survey designs. At present, survey objects are not fully
supported, however the functionality will be added over time.
</p>
</li>
<li><p> A huge reduction in computation requirements for plots to
increase efficiency.
</p>
</li>
<li><p> Algorithms used to compute inference intervals have been
modified to use iNZightMR for comparisons.
</p>
</li>
<li><p> lots of other changes to layout and presentation
</p>
</li>
<li><p> added additional arguments <code>locate</code>, <code>locate.id</code>,
<code>locate.col</code> (and others) for locating points by IDs.
This is used in the improved locator functinoality in the main
<code>iNZight</code> program.
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> the <code>col.by</code> and <code>size.by</code> arguments have been
replaced by <code>colby</code> and <code>sizeby</code>
</p>
</li>
<li><p> documentation has been added for several of the functions (finally!)
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 1.0.3</h3>



<h4>BUG FIXES</h4>


<ul>
<li><p> specifying &lsquo;g2.level' with numbers wasn&rsquo;t working, has been fixed for plots,
summary and inference information.
</p>
</li>
<li><p> added more space to the y-axis on scatter plots
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 1.0.2</h3>



<h4>BUG FIXES</h4>


<ul>
<li><p> An error where the response was printed instead of the
x-variable name in summary output for quadratic curves has been
fixed.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>Changes in Version 1.0.1</h3>



<h4>MINOR CHANGES</h4>


<ul>
<li><p> The type of plot used can be specified by setting the
'largesample' argument. When set to 'TRUE', it uses the histogram
or grid-density plot; when 'FALSE' it uses the dotplot or scatter
plot. If set to 'NULL', it uses the sample size to determine which
plot to draw (default).
</p>
</li>
<li><p> To allow identification features and any additional features
to be added to plots afterwards, the last viewport is the one
surrounding the main plot (excluding the plot labels and
legend). Note that this only works if the data haven't been broken
down by 'g1'.
</p>
</li>
<li><p> Display which variables cannot be plot due to too many
levels, as well as the number of levels, when attempting to draw
bar plot. (max levels = 101).
</p>
</li>
<li><p> Trend lines and smoothers added to the legend.
</p>
</li>
<li><p> Alternative method of shading grid-tiles on the grid-density
plot using quantiles rather than absolute counts. This prevents
large counts having too large of an influence.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> A bug where the grid-density plot is not using the correct scale
has been fixed.
</p>
</li></ul>




</div>  <div class='versionSection'><h3>MAJOR RELEASE VERSION 1.0.0</h3>


<ul>
<li><p> New major release of iNZightPlots released, completely rewritten
using 'grid'.
</p>
</li></ul>



</div>
