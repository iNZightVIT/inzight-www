<?php
  require_once('assets/objects/setup.php');

  // Try to detect platform
  $auto = false;

  if (isset($_GET["os"])) {
    if (in_array($_GET["os"], array("Windows", "Mac"))) {
      $os = $_GET["os"];

      // auto download for Windows
      if ($os == "Windows") {
        $file = $download_links[$os];
        $metatags = "<meta http-equiv='Refresh' content='1; url=download.php?file=" . $file . "'>";
        $auto = true;
      }
    }
  }

  if (!isset($os)) {
    require_once('assets/functions/os_detect.php');
    $os = getOS();
  }

  // The main page starts here:
  require_once('assets/includes/1-top_matter.php');
  require_once('assets/includes/2-header.php');


  if ($auto) { ?>

    <h2>Downloading iNZight</h2>

  <?php }
?>



<?php
require_once('assets/includes/3-bottom_matter.php');
?>
