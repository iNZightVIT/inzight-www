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

  <div class="panel panel-info space-above">
    <div class="panel-heading">
      <h4 class="panel-title">iNZight 4.2 Transition Guide</h4>
    </div>

    <div class="panel-body">
      <p>
        The new version of iNZight contains some interface changes.
        Check out the <a href="/docs/transition-to-4.2/">Transitioning to iNZight 4.2</a>
        guide to see what's changed.
      </p>
    </div>
  </div>

  <p>
    <strong>Previous versions:</strong><br>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-4.3.0.exe"; ?>">
      iNZightVIT v4.3.0 for Windows
    </a> (released 18 January 2023)<br/>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-4.2.0.exe"; ?>">
      iNZightVIT v4.2.0 for Windows
    </a> (released 8 February 2022)<br/>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-4.1.4.exe"; ?>">
      iNZightVIT v4.1.4 for Windows
    </a> (released 13 August 2021)<br>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-4.0.3.exe"; ?>">
      iNZightVIT v4.0.3 for Windows
    </a> (released 2 March 2021)<br>
    <a href="<?php echo $download_dir . "Windows/iNZightVIT-installer-3.5.3.exe"; ?>">
      iNZightVIT v3.5.3 for Windows
    </a> (released 11 May 2020)
  </p>

  <?php if ($nightly_version != "") { ?>
  <p>
    <strong>Nightly build (development version)</strong>:<br>
    <a href="<?php echo $download_dir . "iNZightVIT-installer-nightly.exe"; ?>">
      iNZightVIT v<?php echo $nightly_version; ?> for Windows
    </a> (built <?php echo $nightly_date; ?>)<br>
    <emph>When using this version, expect changes and bugs! It's not fully tested, nor is it supposed to be stable. If you opt to use this version, send your feedback (bugs, changes you don't like, etc) to <a href="mailto:inzight_support@stat.auckland.ac.nz?subject=iNZight nightly build <?php echo $nightly_version; ?>">inzight_support@stat.auckland.ac.nz</a></emph>.
  </p>
  <?php
    if (file_exists($rel . 'install/nightly_changes.md')) {
  ?>
  <p>
    <details>
      <summary>What's new in the developmental version?</summary>
        <p>
        <?php
          include_once($rel . 'assets/libraries/md.php');
          $Pd = new ParsedownExtra();
          $text = file_get_contents($rel . "install/nightly_changes.md");
          echo $Pd->text($text);
        ?>
        </p>
    </details>
  </p>
  <?php } ?>
  <?php } ?>

  <hr>
  <?php include($rel.'instructions/install_windows.php'); ?>
</div>
