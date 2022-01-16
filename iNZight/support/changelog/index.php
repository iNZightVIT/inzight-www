<?php
$rel = "../../";
$crumbs = array("Support" => "../");

if (isset($_REQUEST['pkg'])) {
  $pkg = $_REQUEST['pkg'];
} else {
  $pkg = "none";
}

if ($pkg == "none") {
  $crumbs["Change Log"] = "active";
} else {
  $crumbs["Change Log"] = "./";
  $crumbs[$pkg] = "active";
}
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>
<div class="container">

<?php

if ($pkg == "none") { ?>

<div class="markdown">
  <h1>iNZight Version History</h1>

  <p>
    iNZightVIT is a collection of R packages. We keep separate change logs for each individual
    package, which can be viewed below. The main package, iNZight, contains a list of all
    interface changes, and also mentions when changes are made in other packages to improve
    functionality between versions.
  </p>

  <p>
    The change log for the main iNZight packages can be viewed here:
    <div>
      <?php
      foreach (array("iNZight" => "iNZight", "VIT" => "vit") as $pkg => $url) {
      echo '<a href="./?pkg='.$url.'" class="btn btn-link">' . $pkg . '</a>';
      }
      ?>
    </div>
  </p>

  <p>
    The change log for the modules in the Advanced menu (e.g, Time Series, Model Fitting, etc.)
    are contained in the following package:
    <div>
      <?php
      foreach (array("iNZightModules") as $pkg) {
      echo '<a href="./?pkg='.$pkg.'" class="btn btn-link">' . $pkg . '</a>';
      }
      ?>
    </div>
  </p>

  <p>
    The remaining change logs for other packages related to iNZight can be found here:
    <div>
      <?php
      $pkgs = array("iNZightPlots", "iNZightTS", "iNZightMR", "iNZightRegression", "iNZightMaps", "iNZightTools");
      asort($pkgs);
      foreach ($pkgs as $pkg) {
      echo '<a href="./?pkg='.$pkg.'" class="btn btn-link">' . $pkg . '</a>';
      }
      ?>
    </div>
  </p>
</div>


<?php } else { ?>

  <h3>Changes for <?php echo $pkg; ?></h3>
  <div class="rhistory">

    <?php
      include_once($rel . 'assets/libraries/md.php');
      $Pd = new ParsedownExtra();
      $text = file_get_contents("changes/" . $pkg . ".md");
      $text = $Pd->text($text);
      echo $text;
    ?>
  </div>


</div>

<?php }
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
