<?php
  $rel = "./";
  require_once($rel . 'assets/objects/setup.php');
  require_once($rel . 'assets/functions/filesize.php');

  // whether or not we use the cloud files:
  $file_base = "./" . $download_dir;
  $file_ext = "";
  if ($include_secondary_links) {
    if ($cloud_as_main) {
      $file_ext = "_cloud";
    }
  }


  $href  = "getinzight.php?";
  $href .= "os=" . $_POST["os"];
  $HREF = $href;
  $href2 = $href;
  if ($include_secondary_links & $cloud_as_main) {
    $href .= $file_ext;
  } else {
    $href2 .= $file_ext;
  }
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
      if ($download_links[$mac_version . "_cloud"] === false) {
        $include_secondary_links = false;
        $href = $HREF;
      }
      break;
  }

  if (isset($file)) {
    $size = getFileSize($file_base . $file);

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

  <?php if ($include_secondary_links) { ?>
    <div class="space-above">
      <b>Alternative link for New Zealand users:</b>
      <a href="<?php echo $href2; ?>">iNZightVIT for <?php echo $os; ?></a>
    </div>
    <p>
      This is a direct link from the University of Auckland servers, and might be faster if you're based in NZ (especially if downloading from the UoA Campus).
    </p>
  <?php } ?>

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

    <?php if ($os_version == 11) { ?>
      <div class="label space-above">
        WARNING TO R USERS
      </div>
      <p>
        Due to security changes, the scripts used to run iNZight in a standalone R installation no longer work. Therefore, the new installer installs R version 3.0.2 onto your system, however <b>it will not overwrite any current installation</b>. If you use a version of R &geq; 3.1, the iNZightVIT app will not run because the necessary version of R cannot be found.
      </p>

      <p>
        Unfortunately, we are currently unable to offer a solution unless you can manually install iNZight onto your system;; however, the GTK+ software doesn't seem to be compatible with recent versions of R. Check out <a href="https://www.stat.auckland.ac.nz/~wild/iNZight_Old/ruser.php">these instructions</a> for an overview of installing iNZight in R.
      </p>
      <p class="note">
        Note: these instructions are hosted on an older site, and haven't been updated recently, but the <code>install.packages()</code> command hasn't changed. We will update this page when a viable installation method presents itself. If you have one, <a href="mailto:inzight_support@stat.auckland.ac.nz">please let us know</a>!!!
      </p>
    <?php } ?>
  <?php } ?>
