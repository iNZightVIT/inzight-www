
<h2>Change Log for vit</h2>

<h3>Changes in version 1.2.4</h3>

<p>Release date: 27 July 2015
</p>


<h4>NEW FEATURE/BUG FIXES</h4>


<ul>
<li><p> Allow users to modify the <code>ps</code> and <code>dpi</code> values
for Acinonyx plots. This is mostly useful for Macbook Pro (retina)
users.
</p>
</li></ul>




<h3>Changes in version 1.2.3</h3>

<p>Release date: 16 June 2015
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> the &quot;File Browser&quot; should now start in the iNZightVIT
directory on Macs (rather than the &quot;Home&quot; directory, '~').
</p>
</li>
<li><p> on mac machines, we provide the ability to create a
'.vitprofile' file in the main iNZightVIT folder which will
control the resolution of the graphics in the VIT module.
</p>
</li></ul>




<h3>Changes in version 1.2.2</h3>

<p>Release date: 10 June 2015 
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> New banner with the new iNZight logo in the main start up screen      
</p>
</li></ul>




<h3>Changes in version 1.2.1</h3>

<p>Release date: 18 September 2014
</p>


<h4>MINOR CHANGES</h4>


<ul>
<li><p> Can now read in data files which have comments in them -
denoted by #'s
</p>
</li></ul>




<h3>Changes in version 1.2.0</h3>

<p>Release date: 18 January 2014
</p>


<h4>MAJOR CHANGES</h4>


<ul>
<li><p> Because 'iNZight' has been rewritten using 'gWidgets2', we
needed to rewrite several functions in the 'vit' package to ensure
users could still switch between iNZight and VIT (and back again)
without restarting their session. The current version involves
detaching and attaching the correct gWidgets version when iNZight
is loaded or closed.
</p>
</li></ul>




<h4>MINOR CHANGES</h4>


<ul>
<li><p> As with other packages in the iNZightVIT bundle, the version
numbering has been updated. The previous version was updated from
beta to version 1.x, and the new release as version 1.2 (this is
because there is no functional difference between the versions,
however they are no longer compatible).
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Users can now close the graphics device in the VIT module,
and are able to return to the home screen (previously, they
experienced a fatal error when trying to return to the home screen
if they closed the graphics device).
</p>
</li></ul>




<h3>Changes in version 1.1.0-20130227</h3>



<h4>BUG FIXES</h4>


<ul>
<li><p> When doing randomisation testing with a 2 level categorical
variable as the first variable, changing the level of interest
could cause all data to be plotted as if it belonged to the level
of interest.
</p>
</li></ul>




<h3>Changes in version 1.1.0-20130122</h3>



<h4>MINOR CHANGES</h4>


<ul>
<li><p> Reverting 'stackPoints' to old behaviour for 'Data' and
'Sample' panels. Modified slightly so that the &quot;bins&quot; are now half a
point's width.
</p>
</li>
<li><p> Updating mechanism in iNZightVIT improved.
</p>
</li></ul>




<h3>Changes in version 1.1.0-20121008</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> Added updating mechanism to keep VIT up to date without
grabbing the entire distribution. This can be called by running
<code>updateVit()</code>. The iNZightVIT distribution does include a
script <code>UPDATE_iNZightVIT.bat</code>
(<code>UPDATE_iNZightVIT.command</code> for OSX) to automate this task.
</p>
</li>
<li><p> Added a new function <code>vitBugReport()</code>, which provides
instructions for creating a bug report.
</p>
</li>
<li><p> Version strings are tagged with a date. This is exposed in
the home screen.
</p>
</li></ul>




<h4>MISC</h4>


<ul>
<li><p> Reworked the dependency structure of VIT. This should make
it slightly faster to load and prints less to the console.
</p>
</li>
<li><p> Increasing speed of plotting regression by making slopes
opaque. This is reverting back to the original implementation.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Fix for Mac clients which were selecting the wrong graphics
device.
</p>
</li></ul>




<h3>Changes in version 1.1.0-20120822</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> Better handling of large datasets. The data-view is now
disabled in favour of variable-view only from 200,000 cells.
</p>
</li>
<li><p> Added support for showing the theoretical distributions for:
</p>

<ul>
<li><p> Differences between two proportions.
</p>
</li>
<li><p> Regression.
</p>
</li></ul>

</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Fix for 2 Sample Proportions in the Bootstrapping module
(when resampling within groups).
</p>
</li></ul>




<h3>Changes in version 1.1.0-20120725</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> Minor improvements.
</p>
</li></ul>




<h3>Changes in version 1.1.0-20120417</h3>



<h4>NEW FEATURES</h4>


<ul>
<li><p> Major enhancements.
</p>
</li></ul>




<h4>BUG FIXES</h4>


<ul>
<li><p> Various fixes.
</p>
</li></ul>




