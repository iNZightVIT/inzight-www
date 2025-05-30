<?php
$rel = "./";
require_once('assets/objects/setup.php');

require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');
require_once('assets/functions/os_detect.php');

$os = getOS();
$oss = array("Windows", "Mac", "Linux");

$social = array(
    "twitter" => "https://twitter.com/iNZightUoA",
    // "mastodon" => "https://fosstodon.org/@inzight",
    "github" => "https://github.com/iNZightVIT",
    // "facebook" => "https://www.facebook.com/inzightuoa",
    // "discord" => "https://discord.gg/gxEMdqWE",
)

?>


<div class="container feature current-sponsors">
  <div class="col-md-12 text-center">
    <div class="sponsor-group">
      <h4>iNZight development is currently supported by:</h4>
      <div class="sponsor-logos" style="">
        <a href="https://inzight.co.nz">
          <img src="https://inzight.co.nz/inzight-light.png" alt="iNZight Analytics" height="50">
        </a>
        <a href="https://stat.auckland.ac.nz">
          <img src="/img/uoa_logo.png" height="50" alt="University of Auckland, Department of Statistics" />
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-12 text-right sponsors-all"><a href="/about/sponsors">See all sponsors &gt;</a></div>
</div>

<div class="container feature">
  <div class="col-md-8 text-center">
    <img src="img/feature.gif" class="placeholder" srcset="img/feature-large.gif 900w, img/feature.gif 700w"></img>
  </div>

  <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0">
        <h5><strong>Where to find help:</strong></h5>
        <div class="help-feed">
          <?php
            // print each social media link
            foreach ($social as $key => $value) {
              echo "<a href='$value' rel='me' target='_blank'><img src='img/icons/icons8-$key.svg' height='30' /></a>";
            }
          ?>
        </div>
        <!-- <div class="help-feed">
          <a href="https://twitter.com/intent/tweet?screen_name=iNZightUoA&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @iNZightUoA</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <a href="https://gitter.im/iNZightVIT/Lobby">
              <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
          </a>
          <a onClick="FB.CustomerChat.showDialog()" href="#" class="btn btn-primary btn-xs">Facebook Chat</a>
        </div>-->
    <a href="getinzight.php" class="thumbnail alert alert-info text-center">
      <h4>Download Now</h4>
    </a>

    <dl class="dl-horizontal">
      <dt>Latest Version:</dt>
      <dd>
        <?php echo $inzight_version; ?>
        <a href="support/changelog/?pkg=iNZight" class="small">(what's new?)</a>
      </dd>

      <dt>Release Date:</dt>
      <dd><?php echo $release_date; ?></dd>

      <dt>Price:</dt>
      <dd>100% Free!</dd>
    </dl>

    <p><strong>Returning users:</strong><br/>
      Check out the <a href="/docs/transition-to-4.2">transition guide</a>
      for help navigating the changes in the latest version of iNZight!
    </p>

    <hr>
    <p><strong>On a mac or tablet? Try our online version:</strong></p>
    <a href="<?php echo $inzight_online_link; ?>" class="thumbnail alert-info lite text-center">
      <h4><?php echo $inzight_text; ?> Lite</h4>
    </a>

  </div>
</div>




<div class="container" style="margin-top:120px">
  <!-- <div class="page-header"> -->
    <h2>See <?php echo $inzight_text; ?> in action below ...</h2>
  <!-- </div> -->
</div>

<div class="container-fluid">
  <hr>
  <div class="explore row">
    <div class="exploretext col-md-6">
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

    <div class="image col-md-6">
        <img src="img/01_landing/smart_graphs.gif">
    </div>
  </div>

  <div class="explore row">
    <div class="exploretext col-md-6 col-md-push-6">
      <h3>
        Discover trends by subsetting or adding colour to your plots
      </h3>

      <p>
        Two subsetting slots allow you to quickly detect trends or relationships between categories of a factor variable.
        Colour, sizing, and many other features, can be added through the <b>Add to Plot</b> interface.
      </p>
    </div>
    <div class="image col-md-6 col-md-pull-6">
        <img src="img/01_landing/subset_colour_size.gif">
    </div>
  </div>

  <div class="explore row">
    <div class="exploretext col-md-6">
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
    <div class="image col-md-6">
        <img src="img/01_landing/summary_info.gif">
    </div>
  </div>


  <hr>
</div>
<div class="container space-above">
  <div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4 text-center" style="margin-bottom: 100px">
    <a href="getinzight.php" class="thumbnail">
      <h4>Download <?php echo $inzight_text; ?> Now!</h4>
    </a>
    <!--<h2>Like what you see? <a href="getinzight.php">Get <?php echo $inzight_text; ?> Here!</a></h2>-->
  </div>
</div>


<?php
require_once('assets/includes/3-bottom_matter.php');
?>
