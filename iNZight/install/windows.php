<?php
$rel = "../";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');
?>

<hr>
<div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_windows">

  <h4>Download Installer</h4>

  <p>
    Click the link to download 
    <a href="<?php echo $download_dir . $download_links["Windows"]; ?>">
      <?php echo $download_links["Windows"]; ?>
    </a>
  </p>

  <hr>
  <?php include($rel.'instructions/install_windows.php'); ?>
</div>