<?php
$rel = "./";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');

// Try to detect platform
$auto = false;
$os_version = 0;  // default to 0
$cloud_dl = false;

$operating_systems = array(
  "windows" => "Windows", "mac" => "Mac", "linux" => "Linux"
);

$install_only = isset($_GET["inst"]);
$link_base = "./" . $download_dir;
$linkBase = $baseURL . $download_dir;

if (isset($_GET["os"])) {
  $OS = $_GET["os"];

  // if (in_array($OS, array("Windows", "Mac", "Linux"))) {
  //   $os = $OS;
  //   // auto download for Windows
  //   if ($os == "Windows") {
  //     if ($download_links["Windows_cloud"] === true) {
  //       $fromCloud = "&cloud";
  //       $link_base = $cloud_URL;
  //       $linkBase = $link_base;
  //     }
  //     $file = $download_links[$os];
  //     if (!$install_only) {
  //       $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . $fromCloud . "'>";
  //     }
  //     $auto = true;
  //   } else if ($os == "Mac") {
  //     // necessary to grab the OS version:
  //     if (isset($_GET["v"])) {
  //       $os_version = (int)$_GET["v"];
  //       if ($os_version < 6 | $os_version > 12) {
  //         $os_version = 0;
  //       } else {
  //         $mac_version = ($os_version > 8) ? "osx" : (($os_version > 6) ? "osx-ml" : "osx-sl");
  //         $file = $download_links[$mac_version];
  //         if ($download_links[$mac_version . "_cloud"] === true) {
  //           $fromCloud = "&cloud";
  //           $link_base = $cloud_URL;
  //           $linkBase = $link_base;
  //         }
  //         if (!$install_only) {
  //           $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . $fromCloud . "'>";
  //         }
  //         $auto = true;
  //       }
  //     }
  //   } else if ($os == "Linux") {
  //     if (isset($_GET["dist"])) {
  //       // we only want to allow these strings for now:
  //       if (in_array($_GET["dist"], $linux_dists)) {
  //         $distribution = $_GET["dist"];
  //       }
  //     }
  //   }
  // } else {
  //   unset($os);
  // }
}


if (!isset($os)) {
  require_once('assets/functions/os_detect.php');
  $os = getOS();
}
// The main page starts here:
require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');

if ($auto) {
  echo "Auto download";
} else {
?>

<div class="container">


  <div class="col-md-12 col-lg-10 col-lg-push-1" id="osSelect">
    <!-- <h3>Download iNZight</h3> -->
    <div class="row">
      <?php
        foreach ($operating_systems as $os => $osname) {
          ?>
            <div class="col-md-4 text-center">
                <a href="#" class="thumbnail os-icon os-icon-<?php echo $os; ?>" data-os="<?php echo $os; ?>"
                   data-filename="<?php echo $download_links["Windows"]; ?>">
                  <img src="img/<?php echo $os; ?>-icon.png" alt="Windows">
                  <div class="caption">
                    <h4><?php echo $osname; ?></h4>

                    <small class="os-details">
                      <?php
                        switch ($os) {
                          case "windows":
                            echo "<span class='glyphicon glyphicon-circle-arrow-down'></span> Download Installer (" .
                              getFileSize($link_base . $download_links["Windows"]) . ")";
                            break;
                          case "mac":
                            echo "Select Installation Type";
                            break;
                          case "linux":
                            echo "Installation Instructions";
                        }
                      ?>
                    </small>
                  </div>
                </a>
            </div>
          <?php
        }
      ?>
    </div>

    <div class="legacy">
      <hr>
      <h5>Prefer to go Legacy?</h5>

      <p><strong>Last stable release: 2.5.1 (released 16 November, 2015)</strong></p>
      <ul>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-zipfile.zip">iNZightVIT Windows Zipfile</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-zipfile.zip"); ?>)
        </li>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-osx.dmg">iNZightVIT Mac Installer (OS X 10.9 or later)</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx.dmg"); ?>)
        </li>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-osx-ml.pkg">iNZightVIT Mac Installer (OS X 10.6&ndash;10.8)</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx-ml.pkg"); ?>)
        </li>
      </ul>
    </div>
  </div>


  <div id="osDesc">
    <!-- ###################################################################### WINDOWS -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_windows">
      <h4>Great! Your download should start automatically.</h4>

      <p class="small">
        If not, use this link:
        <a href="<?php echo $link_base . $download_links["Windows"]; ?>"><?php echo $linkBase . $download_links["Windows"]; ?></a>
      </p>

      <hr>
      <?php include('instructions/install_windows.php'); ?>
    </div>

    <!-- ###################################################################### MAC -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_mac">
      <!-- <h4>Download iNZightVIT on Mac</h4> -->

      <div class="row space-above">
        <a href="#" data-file="full" data-filename="<?php echo $download_links["osx"]; ?>"
           class="col-md-8 col-md-offset-2 thumbnail text-center os-icon os-icon-macfull alert alert-info">
          <div class="caption">
            <h4>iNZightVIT Full Installer</h4>
            <p>
              iNZight + dependencies
            </p>
            <p>
              If you're new to iNZight, this is what you'll want.
            </p>
            <small class="os-details">
              <span class="glyphicon glyphicon-circle-arrow-down"></span>
              Download Installer
              (<?php echo getFileSize($link_base . $download_links["osx"]); ?>)
            </small>
          </div>
        </a>

        <a href="#" data-file="self" data-filename="<?php echo $download_links["osx-self"]; ?>"
           class="col-md-8 col-md-offset-2 thumbnail text-center os-icon os-icon-macself alert alert-warning">
          <div class="caption">
            <h4>iNZightVIT Self-installer</h4>
            <p>
              No dependencies &mdash; you'll need to install them yourself.<br>
              Will install necessary packages when you launch iNZight.
            </p>
            <p>
              If you use R, this is what you want.
            </p>
            <small class="os-details">
              <span class="glyphicon glyphicon-circle-arrow-down"></span>
              Download Installer
              (<?php echo getFileSize($link_base . $download_links["osx-self"]); ?>)
            </small>
          </div>
        </a>
      </div>

      <div class="depreciation-notice">
        <hr>
        <h4 class="panel-title">OS X 10.8 and earlier</h4>
        <p>
          Unfortunately, we no longer support iNZight on OS X 10.8 and earlier.
        </p>
        <p>
          If you are still running one of these versions of OS X, you'll need to install iNZight version 2.5:
        </p>
        <p>
          <a href="downloads/iNZightVIT-2.5.1-osx-ml.pkg">iNZightVIT 2.5 Installer for OS X 10.6&ndash;10.8</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx-ml.pkg"); ?>)
        </p>

      </div>

      <div id="macInstall_full">
        <h4>Awesome! iNZight is on its way to your Downloads folder.</h4>

        <p>
          If it doesn't happen automatically, use this link:<br>
          <a href="<?php echo $link_base . $download_links["osx"]; ?>"><?php echo $linkBase . $download_links["osx"]; ?></a>
        </p>

        <hr>
        <?php include('instructions/install_mac.php'); ?>
      </div>
      <div id="macInstall_self">
        <h4>Awesome! The download should be done by now.</h4>

        <small>
          If it didn't start automatically, use this link:
          <a href="<?php echo $link_base . $download_links["osx-self"]; ?>"><?php echo $linkBase . $download_links["osx-self"]; ?></a>
        </small>

        <hr>

        <p>
          Once the download completes,
          <ol>
            <li>If it hasn't done so automatically, extract the file by double-clicking <code><?php echo $download_links["osx-self"]; ?></code></li>
            <li>Drag the iNZightVIT folder to Applications.</li>
            <li>Ensure you have the necessary dependencies, listed below.</li>
            <li>In <strong>Applications</strong> &gt; <strong>iNZightVIT</strong>,
            start iNZight by double-clicking the icon.
            The necessary R packages will automatically be installed the first time you run iNZight.
            </li>
          </ol>
        </p>

        <hr>
        <h4>
          Dependencies
          <p class="pull-right">
            <!-- <small>On Twitter or Github?</small> -->
            <a href="https://gitter.im/iNZightVIT/Lobby">
              <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
            </a>
          </p>
        </h4>

        <p>
          To run iNZight, you'll need the following dependencies.
          If you've had iNZight running on your machine before,
          you'll already have 1 and 2.
        </p>

        <ul>
          <li><a href="<?php echo $download_links["gtk-2.24"]; ?>">GTK2+</a> (direct download link)</li>
          <li><a href="<?php echo $download_links["xquartz"]; ?>">XQuartz</a></li>
          <li><a href="https://www.r-project.org/">R (>= 3.0)</a></li>
        </ul>
      </div>
    </div>

    <!-- ###################################################################### LINUX -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_linux">

      <h4>
        Installing iNZight on Linux
        <p class="pull-right">
          <!-- <small>On Twitter or Github?</small> -->
          <a href="https://gitter.im/iNZightVIT/Lobby">
            <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
          </a>
        </p>
      </h4>

      <p>
        You'll first need to make sure you have the necessary dependencies.
        Exactly what these are depends on your specific version of linux.
      </p>

      <ul>
        <li>
          <strong>GTK2+</strong>
          &mdash; use your package manager (Google should be able to help)
          <p>
            Ubuntu 14.04 or later, Linux Mint: <code>apt-get install libgtk2.0-dev</code>
          </p>
        </li>
        <li>
          <strong>XOrg Windowing System</strong>
          &mdash; package manager (and/or Google) again (Note: this may be installed already)
          <p>
            Ubuntu 14.04 or later, Linux Mint: <code>apt-get install xorg-dev</code>
          </p>
        </li>
        <li>
          <a href="https://www.r-project.org/">R (>= 3.0)</a>
          &mdash; the bash installer assumes R is installed and can be run using <code>R</code>
        </li>
      </ul>

      <p>
        Once you've got those installed, copy and paste the following line into a terminal:
        <pre>bash <(curl -fsSL <?php echo $download_links["linux"]; ?>)</pre>
      </p>

      <p>
        This should install the necessary packages into a directory you choose
        (by default, this is <code>~/iNZightVIT</code>).
        All of the R packages necessary for iNZight will be kept there to keep your own
        R library clean.
      </p>

      <div class="panel panel-danger">
        <div class="panel-heading">
          <h5 class="panel-title">Disclaimer: Testing Stage</h5>
        </div>
        <div class="panel-body">
          <p>
            The install script has been tested on <strong>Ubuntu 16.04</strong>.
            I don't think there's anything harmful in it, but feel free to check the source first.
          </p>
          <p>
            If you have any issues, do let me know at <a href="mailto:inzight_support@stat.auckland.ac.nz">inzight_support@stat.auckland.ac.nz</a>.
            If you are clever and can make the script better, feel free to send the code or submit a pull request.
          </p>
        </div>
      </div>

      <p><strong>Alternatively</strong>, you can install it through R yourself:</p>
      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Rcommands">
        Manual R Package Instructions
      </button>

      <div id="Rcommands" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Install iNZight through R</h4>
            </div>

            <div class="modal-body">
              <p>
                If you use R yourself, you may prefer to install iNZight yourself.
              </p>

<pre>install.packages('iNZight', dependencies = TRUE,
                 repos = c('http://r.docker.stat.auckland.ac.nz', 'https://cran.rstudio.com'))</pre>

              <p>
                The <code>dependencies = TRUE</code> argument is recommended, as it will ensure you get the full set of iNZight packages (<code>Depends</code>, <code>Imports</code>, <em>and</em> <code>Suggests</code>), some of which include colour palettes and add-on modules.
              </p>
              <p>
                You may also switch <code>https://cran.rstudio.com</code> with your preferred CRAN mirror.
              </p>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4 class="space-above">Run iNZight</h4>

      <p>
        To start iNZight, go to the iNZightVIT directory (<code>~/iNZightVIT</code> by default)
        and run <code>./start_inzight</code>.
      </p>

      <p>
        If you would like to create a global <code>inzight</code> command, just run
        the following command from the iNZightVIT directory
        (<code>~/iNZightVIT</code> by default):
        <pre>make install</pre>
      </p>

      <hr>
      <h4>Uninstall</h4>

      <p>
        If you no longer want iNZight, just run
        <pre>cd ~/iNZightVIT &amp;&amp; make uninstall</pre>
        (You might need to add <code>sudo</code> before <code>make uninstall</code>).<br>
        This will delete the <code>inzight</code> command (if you made one)
        and delete the <code>~/iNZightVIT</code> directory.
      </p>
    </div>
  </div>

</div>

<?php
}
?>

<script src="js/getinzight.js"></script>


<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
