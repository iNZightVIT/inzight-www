<?php
require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');
?>


<p class="content blurb">
  Easily explore data and discover trends without learning complex software
</p>


<div class="feature">
  <img src="img/feature.gif" class="placeholder"></img>

  <div class="download">
    <div class="dl-options">
      <a href="download.php" class="download_button">
        <span class="download_now">Download Now</span>
        <span class="os_name">for Windows</span>
      </a>

      <span class="alt-options">
        (<a href="mac.php">Mac</a> or <a href="ruser.php">Linux</a> download)
      </span>

      <div class="group">
        <span class="group-label">Latest Version:</span>
        <span class="group-value">2.0.4</span>
      </div>

      <div class="group">
        <span class="group-label">Release Date:</span>
        <span class="group-value">02.02.2015</span>
      </div>
    </div>

    <div class="download-info">
      <div class="group gap">
        <div class="grouptext">
          Or try our online application:
        </div>
      </div>
      <a href="http://docker.stat.auckland.ac.nz" class="online-link">
        <?php echo $inzight_text; ?> Lite
      </a>
    </div>

  </div>
</div>



<div class="explore">
  <div class="exploretext">
    <h3>
      <?php echo $inzight_text; ?>
      intelligently draws the appropriate graph depending on the variables you choose
    </h3>

    <p>
      The quick drag-and-drop interface makes it easy to create graphs of your data.
      <?php echo $inzight_text; ?> automatically detects the variable type as either numeric or categorical,
      and draws a dot plot, scatter plot, or bar chart.
    </p>
  </div>

  <div class="image">
      <img src="img/smartGraphs.gif">
  </div>
</div>

<div class="explore">
  <div class="exploretext">
    <h3>
      Discover trends by subsetting or adding colour to your plots
    </h3>

    <p>
      Two subsetting slots allow you to quickly detect trends or relationships between categories of a factor variable.
      Colour, sizing, and many other features, can be added through the <b>Add to Plot</b> interface.
    </p>

  </div>
  <div class="image">
      <img src="img/subsetColourSize.gif">
  </div>
</div>






<?php
require_once('assets/includes/3-bottom_matter.php');
?>
