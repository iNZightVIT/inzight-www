<?php
$rel = "./";
require_once('assets/objects/setup.php');

$metatags  = "<meta http-equiv='Content-type' content='text/html; charset=ISO-8859-1'>\n    ";
$metatags .= "<meta name='keywords' content='free, software, statistics, data analysis, inzight'>\n    ";
$metatags .= "<meta name='description' content='iNZight - a free, easy to use software for statistical data analysis'>\n    ";
$metatags .= "<meta http-equiv='Content-Language' content='en'>\n";

require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');
require_once('assets/functions/os_detect.php');

$os = getOS();
$oss = array("Windows", "Mac", "Linux");

if (!in_array($os, $oss)) {
  $os = "Tablet";
}
?>


<p class="content blurb">
  Easily <b>explore data</b> and <b>discover trends</b><br><i>without</i> learning complex software
</p>


<div class="feature">
  <img src="img/feature.gif" class="placeholder" srcset="img/feature-large.gif 900w, img/feature.gif 700w"></img>

  <div class="download">
    <div class="dl-options">
      <a href="getinzight.php<?php if ($os != "Tablet") echo "?os=$os"; ?>" class="download_button">
        <span class="main-text">Download Now</span>
        <span class="sub-text">
        <?php
          if ($os != "Tablet") {
            echo "for $os";
          } else {
            echo "for Desktop";
          }
        ?>
        </span>
      </a>

      <span class="alt-options">
        <?php if ($os != "Tablet") { ?>
          <?php
            $links = array();
            foreach ($oss as $OS) {
              if ($OS == $os) { continue; }
              $links[$OS] = "<a href='getinzight.php?os=$OS'>$OS</a>";
            }
            echo "(" . implode(" or ", $links) . " downloads)";
          ?>
        <?php } ?>
      </span>

      <div class="group">
        <span class="group-label">Latest Version:</span>
        <span class="group-value"><?php echo $inzight_version; ?></span>
      </div>

      <div class="group">
        <span class="group-label">Release Date:</span>
        <span class="group-value"><?php echo $release_date; ?></span>
      </div>
    </div>

    <div class="download-info">
      <div class="group gap">
        <div class="grouptext">
          Or try our online application:
        </div>
      </div>
      <a href="<?php echo $inzight_online_link; ?>" class="online-link">
        <?php echo $inzight_text; ?> Lite
      </a>
    </div>

  </div>
</div>


<div class="seeit">
  See <?php echo $inzight_text; ?> in action below ...
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

<div class="explore">
  <div class="exploretext">
    <h3>
      Numerical summaries available at the click of a button
    </h3>

    <p>
      As with the smart plots, the <b>Get Summary</b> and <b>Get Inference</b> buttons quickly provide numerical
      summaries relating to the displayed plot.
      Tables of counts for categorical data; means, medians and variance for numerical;
      and regression summaries for fitted trend lines.
    </p>

  </div>
  <div class="image">
      <img src="img/summaryInfo.gif">
  </div>
</div>


<div class="getit">
  Like what you see? <a href="getinzight.php">Get <?php echo $inzight_text; ?> Here!</a>
</div>




<?php
require_once('assets/includes/3-bottom_matter.php');
?>
