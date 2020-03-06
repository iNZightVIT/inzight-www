<?php
$rel = "../";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');
?>

<hr>
<div class="col-md-12 col-lg-10 col-lg-push-1 os-desc" id="osDesc_mac">

  <div class="panel panel-danger space-above">
    <div class="panel-heading">
      <h5 class="panel-title">macOS Catalina</h5>
    </div>
    <div class="panel-body">
      Due to changes in the latest iteration of macOS 'Catalina', some users are
      experiencing issues running iNZight due to permissions restrictions. At this time, there is
      no available solution and users are asked to use iNZight on a Windows computer or
      the try <a href="https://lite.docker.stat.auckland.ac.nz">iNZight Lite</a>.
    </div>
  </div>

  <h4>1. Download and Install Dependencies</h4>

  <p>Before you can run iNZight, you must first download and install these three dependencies.
    Follow the package installer for each one, and then return to this page.
  </p>

  <ol class="spread">
    <li><a href="<?php echo $download_links["gtk-2.24"]; ?>">GTK_2.24.17-X11.pkg</a> (direct download link)</li>
    <li><a href="<?php echo $download_links["xquartz"]; ?>">XQuartz</a> (website link, download the latest version)</li>
    <li><a href="<?php echo $download_links["r3.3"]; ?>">R 3.3.3</a> (direct download link).<br>
      <p class="note">
        NOTE: if you already have R installed, and it is NOT version 3.3,
        iNZight cannot be installed on your mac.
        You could try looking into <a href="https://rud.is/rswitch/">this RSwitch App</a>,
        which allows you to switch between versions of R.
      </p>
    </li>
  </ol>

  <hr>
  <h4>2. Restart your computer</h4>

  <p>If you don't restart your computer before trying to run iNZight,
    you may experience problems or be unable to get the program running.</p>

  <hr>

  <h4>3. Download and Install Application</h4>

  <p>
    Click the link to download
    <a href="<?php echo $download_dir . $download_links["osx"]; ?>">
      <?php echo $download_links["osx"]; ?>
    </a>
  </p>

  <p>
    Once the download completes, open it and <strong>Drag the iNZightVIT folder onto the Applications folder</strong>, following the arrow.
  </p>

  <?php include($rel.'instructions/install_mac.php'); ?>
</div>