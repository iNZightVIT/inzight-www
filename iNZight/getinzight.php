<?php
$rel = "./";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');

// Try to detect platform
$auto = false;
$os_version = 0;  // default to 0
$cloud_dl = false;

$operating_systems = ["windows" => "Windows", "mac" => "Mac", "linux" => "Linux"];

$linux_dists = array("Ubuntu", "Debian", "Redhat_Suse");
$distribution = "";

$install_only = isset($_GET["inst"]);
$link_base = "./" . $download_dir;
$linkBase = $baseURL . $download_dir;

if (isset($_GET["os"])) {
  $OS = $_GET["os"];
  $fromCloud = "";

  if (preg_match("/cloud/", $OS)) {
    $cloud_dl = true;
    $OS = str_replace("_cloud", "", $OS);
  }


  if (in_array($OS, array("Windows", "Mac", "Linux"))) {
    $os = $OS;
    // auto download for Windows
    if ($os == "Windows") {
      if ($download_links["Windows_cloud"] === true) {
        $fromCloud = "&cloud";
        $link_base = $cloud_URL;
        $linkBase = $link_base;
      }
      $file = $download_links[$os];
      if (!$install_only) {
        $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . $fromCloud . "'>";
      }
      $auto = true;
    } else if ($os == "Mac") {
      // necessary to grab the OS version:
      if (isset($_GET["v"])) {
        $os_version = (int)$_GET["v"];
        if ($os_version < 6 | $os_version > 12) {
          $os_version = 0;
        } else {
          $mac_version = ($os_version > 8) ? "osx" : (($os_version > 6) ? "osx-ml" : "osx-sl");
          $file = $download_links[$mac_version];
          if ($download_links[$mac_version . "_cloud"] === true) {
            $fromCloud = "&cloud";
            $link_base = $cloud_URL;
            $linkBase = $link_base;
          }
          if (!$install_only) {
            $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . $fromCloud . "'>";
          }
          $auto = true;
        }
      }
    } else if ($os == "Linux") {
      if (isset($_GET["dist"])) {
        // we only want to allow these strings for now:
        if (in_array($_GET["dist"], $linux_dists)) {
          $distribution = $_GET["dist"];
        }
      }
    }
  } else {
    unset($os);
  }
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
    <h3>Download iNZight</h3>
    <div class="row">
      <?php
        foreach ($operating_systems as $os => $osname) {
          ?>
            <div class="col-md-4 text-center">
                <a href="#" class="thumbnail os-icon os-icon-<?php echo $os; ?>" data-os="<?php echo $os; ?>">
                  <img src="img/<?php echo $os; ?>-icon.png" alt="Windows">
                  <div class="caption">
                    <h4><?php echo $osname; ?></h4>

                    <small class="os-details">
                      <?php
                        switch ($os) {
                          case "windows":
                            echo "<span class='glyphicon glyphicon-circle-arrow-down'></span> Download Installer (" .
                              getFileSize("downloads/iNZightVIT-installer_latest.exe") . ")";
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
  </div>


  <div id="osDesc">
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_windows">
      <h4>Thanks for downloading iNZightVIT for Windows</h4>

      <p>
        If the download doesn't start automatically, use the following link:<br>
        <a href="<?php echo $link_base . $download_links["Windows"]; ?>"><?php echo $linkBase . $download_links["Windows"]; ?></a>
      </p>

      <hr>
      <?php include('instructions/install_windows.php'); ?>
    </div>

    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_mac">
      <h4>Download iNZightVIT on Mac</h4>

      <div class="row space-above">
        <a href="#" data-file="full"
           class="col-md-6 col-md-offset-3 thumbnail text-center os-icon os-icon-macfull">
          <div class="caption">
            <h4>iNZightVIT Full Installer</h4>
            <p>
              This contains all of the iNZight dependencies (GTK, XQuartz, R).
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

        <a href="#" data-file="self"
           class="col-md-6 col-md-offset-3 thumbnail text-center os-icon os-icon-macself">
          <div class="caption">
            <h4>iNZightVIT Self-installer</h4>
            <p>
              No dependencies.
              Just a lightweight application framework to make installing and running iNZight
              easy.
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

      <div id="macInstall_full">
        <h4>Thanks for downloading iNZightVIT for Mac</h4>

        <p>
          If the download doesn't start automatically, use the following link:<br>
          <a href="<?php echo $link_base . $download_links["osx"]; ?>"><?php echo $linkBase . $download_links["osx"]; ?></a>
        </p>

        <hr>
        <?php include('instructions/install_mac.php'); ?>
      </div>
      <div id="macInstall_self">
        <h4>Thanks for downloading iNZightVIT for Mac</h4>

        <p>
          If the download doesn't start automatically, use the following link:<br>
          <a href="<?php echo $link_base . $download_links["osx-self"]; ?>"><?php echo $linkBase . $download_links["osx-self"]; ?></a>
        </p>

        <hr>

        <p>
          Once the download completes,
          <ol>
            <li>If it hasn't done so automatically, extract the file by double-clicking <code>iNZightVIT-selfinstall.tar.bz</code></li>
            <li>Drag the iNZightVIT folder to Applications.</li>
            <li>Ensure you have the necessary dependencies, listed below.</li>
            <li>In <strong>Applications</strong> &gt; <strong>iNZightVIT</strong>,
            start iNZight by double-clicking the icon.
            The necessary R packages will automatically be installed the first time you run iNZight.
            </li>
          </ol>
        </p>

        <hr>
        <h4>Dependencies</h4>

        <p>
          To run iNZight, you'll need the following dependencies.
          If you've had iNZight running on your machine before,
          you'll already have 1 and 2.
        </p>

        <ul>
          <li><a href="<?php echo $download_links["gtk-2.24"]; ?>">GTK2+</a> (direct download link)</li>
          <li><a href="<?php echo $download_links["xquartz"]; ?>">XQuartz</a></li>
          <li><a href="https://www.r-project.org/">R (>= 3.1)</a></li>
        </ul>
      </div>
    </div>

    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_linux">
      <h4>Installing iNZight on Linux</h4>

      <p>
        You'll first need to make sure you have the necessary dependencies.
        Exactly what these are depends on your specific version of linux.
      </p>

      <ul>
        <li>GTK2+</li>
        <li>XOrg Windowing System</li>
        <li><a href="https://www.r-project.org/">R (>= 3.1)</a></li>
      </ul>

      <p>
        Once you've got those installed, copy and paste the following line into a terminal:
        <pre>curl https://raw.github.com/iNZightVIT/blah/install_inzight | sh</pre>
      </p>


      <p>
        This should install the necessary packages into a directory you choose
        (by default, this is <code>~/iNZightVIT</code>).
        All of the R packages necessary for iNZight will be kept there to keep your own
        R library clean.
      </p>

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
