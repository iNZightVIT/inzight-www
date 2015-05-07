<?php
  $rel = "./";
  require_once($rel . 'assets/objects/setup.php');

  // Try to detect platform
  $auto = false;
  $os_version = 0;  // default to 0

  $linux_dists = array("Ubuntu", "Debian", "Redhat_Suse");
  $distribution = "";

  $install_only = isset($_GET["inst"]);

  if (isset($_GET["os"])) {
    if (in_array($_GET["os"], array("Windows", "Mac", "Linux"))) {
      $os = $_GET["os"];

      // auto download for Windows
      if ($os == "Windows") {
        $file = $download_links[$os];
        if (!$install_only) {
          $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . "'>";
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
            if (!$install_only) {
              $metatags = "<meta http-equiv='Refresh' content='3; url=download.php?file=" . $file . "'>";
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

    if (!$install_only) { ?>
    <!--
      ///// AUTOMATICALLY START DOWNLOADING THE FILE
      ///// This is the case if redirection for windows, or have already
      ///// visited this page to select the necessary download.
    -->

    <h3>Thank you for downloading <?php echo $inzight_text; ?></h3>

    <p class="large-break">
      The file should begin downloading automatically after 3 seconds.<br>
      If it does not, use this direct link:
      <a href="<?php echo "./" . $download_dir . $file; ?>">
        <?php echo $baseURL . $download_dir . $file; ?>
      </a>
    </p>

  <?php }

    // Display installation instructions - these will grab data from $_GET
    switch ($os) {
      case "Windows":
        include('instructions/install_windows.php');
        $post = "os=win";
        break;
      case "Mac":
        include('instructions/install_mac.php');
        $post = "os=mac&v=$os_version";
        break;
      case "Linux":
        $post = "os=linux";
        break;
    }

  ?>

  <div class="navpanel">
    <span class="prev"></span>
    <span class="section_toc"></span>
    <a href="<?php echo $rel; ?>user_guides/basics/getting_started.php?<?php echo $post; ?>" class="next">
      Next step: Start iNZight
    </a>
  </div>

  <?php } else { ?>
    <!--
      ///// REQUIRE USER TO SELECT DOWNLOAD VERSION
      ///// Select operating system, version, and then download the file.
      ///// Redirects here, but uses above script instead.
    -->

    <h3>Download iNZightVIT</h3>

    <div class="horizontal" id="os_select">
      <div class="label">Operating System:</div>

      <div class="options">
        <a href="getinzight.php?os=Windows" class="option<?php if ($os == "Windows") { echo " selected"; } ?>" id="os_windows">
          <span class="main-text">Windows</span></a>
        <a href="getinzight.php?os=Mac" class="option<?php if ($os == "Mac") { echo " selected"; } ?>" id="os_mac">
          <span class="main-text">Macintosh</span></a>
        <a href="getinzight.php?os=Linux" class="option<?php if ($os == "Linux") { echo " selected"; } ?>" id="os_linux">
          <span class="main-text">Linux</span></a>
      </div>
    </div>

    <div class="horizontal<?php if ($os == "Mac") { echo " show"; } ?>" id="mac_ver_select">
      <div class="label">Mac OS X Version:</div>

      <div class="options">
        <?php
          foreach (array(10 => "Yosemite",
                         9  => "Mavericks",
                         8  => "Lion/Mountain Lion",
                         6  => "Snow Leopard") as $v => $vname) {
            echo "<a href='#' class='option";
            echo ($os_version == $v) ? " selected" : "";
            echo "' id='mac_v$v'>";
            echo "<span class='main-text'>";
            echo "10.$v";
            echo "</span><span class='sub-text'>";
            echo $vname;
            "</span></a>";
          }
        ?>
        <a href="#" class="option" id="mac_v0">
          <span class="main-text">Unsure?</span>
          <span class="sub-text">Find out here</span>
        </a>
      </div>
    </div>

    <div class="horizontal<?php if ($os == "Linux") { echo " show"; } ?>" id="linux_dist_select">
      <div class="label">Linux Distribution:</div>

      <div class="options">
        <?php
          foreach ($linux_dists as $d) {
            echo "<a href='#' class='option";
            echo ($distribution == $d) ? " selected" : "";
            echo "' id='linux_$d'>";
            echo "<span class='main-text'>";
            switch ($d) {
              case "Redhat_Suse":
                echo "Redhat/Suse";
                break;
              default:
                echo $d;
            }
            echo "</span><span class='sub-text'>";
            switch ($d) {
              case "Ubuntu":
                echo "(incl. Mint)";
                break;
              default:
                echo "";
            }
            "</span></a>";
          }
        ?>
        <a href="#" class="option" id="linux_Other">
          <span class="main-text">Other</span>
          <span class="sub-text">Not formally supported</span>
        </a>
      </div>
    </div>


    <div id="dl_links"></div>

  <?php }
?>


<script src="<?php echo $rel; ?>js/downloadButtons.js"></script>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
