<?php
if (isset($crumbs)) {
  echo '<div class="container"><ol class="breadcrumb">';
  foreach ($crumbs as $crumb => $cURL) {
    if ($cURL == "active") {
      echo "<li class='active'>$crumb</li>";
    } else {
      echo "<li><a href='$cURL'>$crumb</a></li>";
    }
  }
  echo '<p class="pull-right">';
  $url = $_SERVER["REQUEST_URI"];
  if ($_SESSION["VLITE"]) {
    echo '<a href="#" id="useDesktop">Desktop</a> | ' .
      '<strong>Lite</strong> <small>[Note: desktop docs shown where Lite is missing]</small>';
  } else {
    echo '<strong>Desktop</strong> | <a href="#" id="useLite">Lite</a>';
  }
  echo '</p>';
  echo '</ol>';
  echo '</div>';
}
?>
