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
  echo '</ol></div>';
}
?>
