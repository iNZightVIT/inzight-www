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
    </a><br>
    Latest version: <?php echo $inzight_version; ?> (<?php echo $release_date; ?>)
  </p>

  <p>
    <strong>Previous version:</strong><br>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-3.5.3.exe"; ?>">
      iNZightVIT v3.5.3 for Windows
    </a> (released 11 May 2020)
  </p>

  <?php if ($nightly_version != "") { ?>
  <p>
    <strong>Nightly build (development version)</strong>:<br>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-nightly.exe"; ?>">
      iNZightVIT v<?php echo $nightly_version; ?> for Windows
    </a> (built <?php echo $nightly_date; ?>)<br>
    <emph>When using this version, expect changes and bugs! It's not fully tested, nor is it supposed to be stable. If you opt to use this version, send your feedback (bugs, changes you don't like, etc) to <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight nightly build <?php echo $nightly_version; ?>">inzight_support@stat.auckland.ac.nz</a></emph>.
  </p>
  <p>
    <details>
      <summary>What's new in the developmental version?</summary>
      <?php
        if (file_exists($rel . 'install/nightly_changes.md')) {
          // $Pd = new ParsedownExtra();
          // $text = file_get_contents($rel . "install/nightly_changes.md");
          // echo $Pd->text($text);
        }
      ?>
    </details>
  </p>
  <?php } ?>

  <hr>
  <?php include($rel.'instructions/install_windows.php'); ?>
</div>
