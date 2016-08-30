<?php
$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

if (isset($_REQUEST['pkg'])) {
  $pkg = $_REQUEST['pkg'];
} else {
  $pkg = "none";
}

?>
<div class="container">

<?php

if ($pkg == "none") { ?>

<a href="../" class="small">&lt; Support</a>

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
    <ul>
      <?php
      foreach (array("iNZight" => "iNZight", "VIT" => "vit") as $pkg => $url) {
      echo '<li><a href="./?pkg='.$url.'">' . $pkg . '</a></li>';
      }
      ?>
    </ul>
  </p>

  <p>
    The change log for the modules in the Advanced menu (e.g, Time Series, Model Fitting, etc.)
    are contained in the following package:
    <ul>
      <li><a href="./?pkg=iNZightModules">iNZightModules</a></li>
    </ul>
  </p>

  <p>
    The remaining change logs for other packages related to iNZight can be found here:
    <ul>
      <?php
      foreach (array("iNZightPlots", "iNZightTS", "iNZightMR", "iNZightRegression") as $pkg) {
      echo '<li><a href="./?pkg='.$pkg.'">' . $pkg . '</a></li>';
      }
      ?>
    </ul>
  </p>
</div>


<?php } else { ?>

  <a href="./" class="small">&lt; List of Packages</a>

  <div class="rhistory">
    <?php
      include "changes/" . $pkg . ".php";
    ?>
  </div>


</div>

<?php }
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
