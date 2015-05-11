
<h2>Change Log for iNZightPlots</h2>

<h3>Changes in Version 1.0.4</h3>

<p>Release date: 17 September 2014
</p>


<h4>MAJOR CHANGES</h4>


<ul>
<li><p> The confidence and comparison intervals on barcharts are now
being calculated using the iNZightMR package. While confidence
intervals are the same, the comparison intervals are hopefully now
more correct - the comparison of n bi/multi-nomials.
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> allow comparison intervals to be shown without CIs on barcharts
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> fixed a bug introduced in R 3.1.0 that yields invalid ylim
for dotplots
</p>
</li>
<li><p> fixed a bug where any bar plots with 0 counts would result
in no plot at all
</p>
</li>
<li><p> fixed the drawing of confidence + comparison intervals in
barcharts
</p>
</li>
<li><p> fixed a bug in triangularMatrix() that was not accounting
for missing values when producing summary/inference output
</p>
</li>
<li><p> various bugs rixed that were introduced by intergration of
iNZightMR
</p>
</li>
<li><p> when using all categorical variables, a bug that resulted in
no plot if y and g1 were the same has been fixed
</p>
</li>
<li><p> update to dev.flush() so any previously unsuccessful plots
are cleared so plotting can continue
</p>
</li></ul>




<h4>PATCH 1.0.4-1</h4>

<p>Date: 29 October 2014
</p>

<ul>
<li><p> Fixed a bug that stopped matrix of plots for some variables.
</p>
</li></ul>




<h3>Changes in Version 1.0.3</h3>

<p>Release date: 17 June 2014
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> specifying &lsquo;g2.level' with numbers wasn&rsquo;t working, has been fixed for plots,
summary and inference information.
</p>
</li>
<li><p> added more space to the y-axis on scatter plots
</p>
</li></ul>




<h3>Changes in Version 1.0.2</h3>

<p>Release date: 4 April 2014
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> An error where the response was printed instead of the
x-variable name in summary output for quadratic curves has been
fixed.
</p>
</li></ul>




<h3>Changes in Version 1.0.1</h3>

<p>Release date: 27 March 2014
</p>


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




<h3>MAJOR RELEASE VERSION 1.0.0</h3>

<p>Release date: 18 January 2014
</p>

<ul>
<li><p> New major release of iNZightPlots released, completely
rewritten using 'grid'.
</p>
</li></ul>



