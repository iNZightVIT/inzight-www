<?php
require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');
?>


<p class="content">
  <?php echo $inzight_text; ?> is a simple data analysis system which was initially designed for high school students to help explore data fast and easy without having to learn complex statistical software. By popular demand, it has been extended to handle multi-variable graphics, time series analysis and generalised linear models.
</p>


<div class="feature">
  <div class="placeholder">Will be example images of iNZight in action here ... but for now you can just deal with this silly placeholder text.</div>

  <div class="download">
    <div class="dl-options">
      <a href="download.php" class="download_button">
        <span class="download_now">Download Now</span>
        <span class="os_name">for Windows</span>
      </a>

      <span class="alt-options">
        (<a href="mac.php">Mac</a> or <a href="ruser.php">Linux</a> download)
      </span>
    </div>

    <div class="download-info">
      <div class="group">
        <span class="group-label">Latest Version:</span>
        <span class="group-value">2.0.4</span>
      </div>

      <div class="group">
        <span class="group-label">Release Date:</span>
        <span class="group-value">02.02.2015</span>
      </div>

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


<p class="content">
  Initially designed for New Zealand high schools, iNZight now extends to multivariable graphics, time series and generalised linear models (including complex survey designs).
</p>


<p class="content">
  This project is led by Chris Wild. Major contributers include:<br>
  Tom Elliott - Junjie Zheng - Marco Kupper - Simon Potter - David Banks - Dineika Chandrananda
</p>


<?php
require_once('assets/includes/3-bottom_matter.php');
?>
