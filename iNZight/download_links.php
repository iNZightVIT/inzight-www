<?php
  $rel = "./";
  require_once($rel . 'assets/objects/setup.php');
  require_once($rel . 'assets/functions/filesize.php');

  $href  = "getinzight.php?";
  $href .= "os=" . $_POST["os"];
  if (isset($_POST["v"])) {
    $href .= "&v=" . (int)$_POST["v"];
  }

  $os = $_POST["os"];
  switch ($os) {
    case "Windows":
      $file = $download_links["Windows"];
      break;
    case "Mac":
      $os_version = (int)$_POST["v"];
      $mac_version = ($os_version > 8) ? "osx" : (($os_version > 6) ? "osx-ml" : "osx-sl");
      $file = $download_links[$mac_version];
      break;
  }

  if (isset($file)) {
    $size = getFileSize("./" . $download_dir . $file);

    $fileSize = ($size == 0) ? "" : " (" . $size . ")";

    $file_info = $file . $fileSize;
  }

?>


  <div class="label">
    Download iNZightVIT<?php if ($os == "Mac") if ($os_version > 6) echo " Package Installer (recommended)"; ?>:
  </div>

  <?php if ($os == "Mac") if ($os_version > 6) { ?>
    <p>
      This will automatically install the necessary software (XQuartz and GTK+),
      and place iNZightVIT in your <b>Applications</b> folder.
    </p>
  <?php } ?>

  <div class="options">
    <a href="<?php echo $href; ?>" class="large-button">
      <span class="main-text">iNZightVIT for <?php echo $os; ?></span>
      <span class="sub-text"><?php echo $file_info; ?></span>
    </a>
  </div>

  <div class="space-above">
    Installation instructions only (i.e., no download):
    <a href="<?php echo $href . '&inst'; ?>">click here.</a>
  </div>

  <?php if ($os == "Mac") if ($os_version > 6) { ?>
    <div class="label space-above">
      Manual Installation
    </div>

    <p>
      If you already have iNZight installed and just need the appropriate iNZightVIT files,
      OR if you have trouble with the package installer:
    </p>

    <ol>
      <li>
        <a href="<?php echo $download_links["xquartz"] ?>">Download and install XQuartz</a>
        (if you haven't already)
      </li>

      <li>
        <a href="<?php echo $download_links[($mac_version == "osx") ? "gtk-2.24" : "gtk-2.18"] ?>">Download and install GTK</a>
        (if you haven't already)
      </li>

      <li>
        After installing the above software, <b>restart your computer</b>.
      </li>

      <?php
        $file = $download_links[$mac_version . "-man"];
        $size = getFileSize("./" . $download_dir . $file);

        $fileSize = ($size == 0) ? "" : " (" . $size . ")";

        $file_info = $fileSize;
      ?>
      <li>
        <a href="<?php echo "download.php?file=".$file; ?>">Download the iNZightVIT files</a>
        <?php echo $file_info; ?>
      </li>

      <li>
        Unzip the downloaded files, then
        <a href="<?php echo $href . '&inst'; ?>">follow the installation instructinos</a>,
        ignoring the first step.
      </li>
    </ol>
  <?php } ?>
