
<h2>Change Log for iNZight</h2>

<h3>Changes in version 2.1.1</h3>

<p>Release date: 09 June 2015
</p>


<h4>BUG FIXES</h4>


<ul>
<li><p> fix a dependency issue required for aggregating data sets
</p>
</li></ul>




<h3>Changes in version 2.1</h3>

<p>Release date: 25 May 2015
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> New hexagonal binning plot available to large samples
</p>
</li>
<li><p> Live updating sliders for the &quot;Add to Plot&quot; panel, which is
now embedded into the main window rather than creating an
additional pop-up window
</p>
</li></ul>




<h4>MAJOR CHANGES</h4>


<ul>
<li><p> The &quot;Add to Plot&quot;, &quot;Remove Additions&quot; and
&quot;Inference Information&quot; windows have been integrated into the main
window with the aim of making the interface cleaner and easier to
navigate.
</p>
</li>
<li><p> When colouring points by a numeric variable, a continuous colour
range is used rather than a discrete one.
</p>
</li>
<li><p> The plotting package has been rewritten to accomodate survey
designs (this will be integrated with iNZight itself at a later
date). However, the plots have been modified to be cleaner and far
more efficient. Additionally, the algorithms used for the
inference information have been updated. For more information on
this, see the iNZightPlots change log.
</p>
</li>
<li><p> The &quot;Get Summary&quot; and &quot;Get Inference&quot; outputs have been
redesigned to hopefully give a more intuitive, cleaner
presentation of the information. 
</p>
</li>
<li><p> From dot plots and histograms, the comparison (and confidence) 
interval values can be read from the graph by clicking 'Get Values'
in the 'Inference Information' panel. This includes the Year 12 intervals
applied to medians.
</p>
</li>
<li><p> LOCATOR: functionality for scatterplots vastly improved,
allowing selection of related points, retaining points over
multiple graphcs, and selecting points by a variable.
(similar upgrades for dot plots coming in v2.2)
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> the number of missing values is now displayed on the plot,
broken down by variable
</p>
</li>
<li><p> the list of options in the 'Add to Plot' window are now in a drop
down menu, rather than radio buttons, to save space
</p>
</li>
<li><p> many other small UI improvements
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> if 'colour by' is set, but the graph is changed to a histogram,
the legend is removed from the plot
</p>
</li>
<li><p> fixes a bug in the plotting that was causing large values to fall off the axes
of the plots
</p>
</li>
<li><p> includes other patches from the previous version of iNZight
</p>
</li></ul>




<h3>Changes in version 2.0.4</h3>

<p>Release date: 18 November 2014
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> The data set name is displayed above the data view
</p>
</li>
<li><p> The variable type is now displayed as a prefix to the variable
names in the variable view
</p>
</li>
<li><p> A new &quot;Updates Available&quot; shows up when new versions are
released
</p>
</li>
<li><p> A new Help tab that includes Licence information, and a link
to the FAQ and Support pages
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> In the &quot;Remove Additions&quot; window, &quot;Remove segmentation&quot; has
been renamed to &quot;Remove colour by&quot; for bar plots, and
&quot;Restore default labels&quot; is added to remove customised plot
labels
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Removes development text from Load Data window
</p>
</li>
<li><p> Fixes a bug in the Locate Points feature when the scales are
vastly different
</p>
</li>
<li><p> Scroll bars added to Reorder Levels window
</p>
</li>
<li><p> The menu has been moved above the plot tabs, so it no longer
gets cut off
</p>
</li></ul>




<h4>Patch 2.0.4-1</h4>

<p>Date: 12-12-2014
</p>

<ul>
<li><p> fixed up the plot device in Time Series on Linux machines
</p>
</li></ul>




<h4>Patch 2.0.4-3</h4>

<p>Date: 10-02-2015
</p>

<ul>
<li><p> fix a bug causing write-protected directories to crash
</p>
</li></ul>




<h4>Patch 2.0.4-4</h4>

<p>Date: 10-03-2015
</p>

<ul>
<li><p> ping for an internet connection before trying to check for updates
</p>
</li></ul>




<h3>Changes in version 2.0.3</h3>

<p>Release date: 17 September 2014
</p>


<h4>MAJOR CHANGES</h4>


<ul>
<li><p> A new Multiple Response analysis module has been added to the
Advanced menu. This utilises the iNZightMR package developed by
Junjie Zeng
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> &quot;Add to Plot&quot; window modified for barcharts - can show onlyake
CIs, and also selects comparison and confidence intervals by default
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Includes a suite of bug fixes in the iNZightPlots package - see its
NEWS file for these
</p>
</li></ul>




<h3>Changes in version 2.0.2</h3>

<p>Release date: 17 June 2014
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> can now cycle through all two-variable plots for a selected
Variable 1
</p>
</li>
<li><p> &quot;play&quot; button for the first subset by variable
(automatically cycle levels)
</p>
</li>
<li><p> data manipulation features added and modified
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> can now specify to identify min/max points in a dot plot
</p>
</li>
<li><p> in the Add to Plot window for barcharts, reworded &quot;segment by&quot; to &quot;colour by&quot; 
for consistency.
</p>
</li>
<li><p> the transparency slider now runs from 0
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p>  identify functionality works for subsets (except when multi plots at once)
</p>
</li></ul>




<h3>Changes in version 2.0.1</h3>

<p>Release date: 27 March 2014
</p>


<h4>NEW FEATURES</h4>


<ul>
<li><p> Identify feature added to the &quot;Add To Plot&quot; menu. This
allows users to interactively label points with 'id' or any other
variable. This feature works for both dot plots and scatter plots.
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> Users can force scatter plots when the sample size is large,
rather than using the alternative grid-density plot.
</p>
</li>
<li><p> Missing observations can be converted to categorical
levels. For categorical variables, the result is a new factor with
the same levels as the original variable, but the additional
'missing' factor level. For continuous variables, a new factor
variable with two levels, 'missing' and 'not missing' is created.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Vertical sliders added to the 'Rename Levels' and 'Rename
factor levels' windows.
</p>
</li>
<li><p> Reorder levels now works as expected, including sort by
frequency.
</p>
</li>
<li><p> Bug where the iNZight window closes even if a user clicks
'cancel' has been fixed.
</p>
</li></ul>




<h3>Changes in version 2.0.0</h3>

<p>Release date: 18 January 2014
</p>


<h4>MAJOR RELEASE</h4>


<ul>
<li><p> The entire iNZight module of iNZightVIT has been rewritten,
with a multitude of changes along the way.
</p>
</li></ul>




