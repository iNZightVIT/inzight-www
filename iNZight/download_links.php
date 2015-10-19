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
      This will automatically install <b>XQuartz, GTK+, and R</b>*,
      and place iNZightVIT in your <b>Applications</b> folder.
    </p>
  <?php } ?>

  <div class="options">
    <a href="<?php echo $href; ?>" class="large-button">
      <span class="main-text">iNZightVIT for <?php echo $os; ?></span>
      <span class="sub-text"><?php echo $file_info; ?></span>
    </a>
  </div>

  <?php if ($os == "Mac") if ($os_version > 6) { ?>
    <p class="small">
      <b>*R users</b> need to follow the instructions at the bottom of the page.
    </p>
  <?php } ?>

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
        <a href="<?php echo $href . '&inst'; ?>">follow the installation instructions</a>,
        ignoring the first step.
      </li>
    </ol>

    <?php if ($os_version == 11) { ?>
      <div class="label space-above">
        INSTALLATION FOR R USERS
      </div>
      <p>
        Due to security changes, the scripts used to run iNZight in a standalone R installation no longer work. Therefore, the new installer installs R version 3.0.2 onto your system, however <b>it will not overwrite any current installation</b>. If you already have R installed, and it is not version 3.0.2 (which is old, so you probably don't) then the iNZightVIT app will (probably) not run.
      </p>

      <p>
        Fortunately, it seems most of the dependencies (such as <code>RGtk2</code>) are now supported, so installation is fairly straightforward. The below instructions were tested on R 3.2.2 (the latest version of R as of 19 October, 2015):
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
          If you had to install either of XQuartz or GTK, you'll need to <b>restart your computer</b>
        </li>

        <li>
          Now launch R and run the following code:

          <pre>
install.packages(c("vit", "iNZightMR", "iNZightTS", "iNZightModules", "iNZightRegression", "iNZightPlots", "iNZight", "iNZightTools"),
                 repos = c("http://docker.stat.auckland.ac.nz/R",
                           "http://cran.stat.auckland.ac.nz"))    # or your preferred CRAN Mirror
          </pre>

          You might get prompted whether to install binary or source; if in doubt, type "n" (for binary) and press return.

          <p class="note">
            Note: you can change <code>dependencies = "depends"</code> if you prefer, but using <code>TRUE</code> will also download the suggested packages, which includes Time Series, Multiple Response, and various other addons that enhance iNZight.
          </p>
        </li>

        <li>
          <b>To Run iNZightVIT:</b>

          <pre>
  library(vit)
  iNZightVIT()
          </pre>
        </li>
      </ol>

      <p><b>Please</b> <a href="mailto:inzight_support@stat.auckland.ac.nz">let us know</a> if you have any issues and we will try to help as best we can.

      <p>
        NOTE: the package <code>Acinonyx</code> hasn't been compiled for any OS later than Mavericks (10.9), and therefore the VIT module's animations will be far too slow, so avoid using them. If you are able to build a working Acinonyx binary (<a href="https://rforge.net/Acinonyx/">Acinonyx homepage</a>), we would very much appreciate if you shared this with us so we can add it to our repository! Contact us at <a href="mailto:inzight_support@stat.auckland.ac.nz">inzight_support@stat.auckland.ac.nz</a>.
      </p>
    <?php } ?>
  <?php } ?>
