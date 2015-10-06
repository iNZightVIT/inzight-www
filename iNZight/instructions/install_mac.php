<?php

$is_sl = $os_version == 6;
$is_ml = $os_version < 9 & !$is_sl;

// OS X version: $os_version
switch ($os_version) {
  case 11:
    $vname = "El Capitan";
    break;
  case 10:
    $vname = "Yosemite";
    break;
  case 9:
    $vname = "Mavericks";
    break;
  case 8:
  case 7:
    $vname = "Lion/Mountain Lion";
    break;
  case 6:
    $vname = "Snow Leopard";
    break;
}
?>

<h3><?php if (!$install_only) { echo "Next step: "; } ?>Install iNZightVIT on Mac OS X: <?php echo $vname; ?></h3>

<ol>

<?php
  // We need to display the Download links for XQuartz and GTK first
  if ($is_sl) { ?>
    <li>
      <a href="<?php echo $download_links["gtk-2.18"]; ?>">Download and install GTK+</a>
    </li>

    <li>
      Restart your Mac (not doing so may result in iNZight crashing).
    </li>
  <?php } else { ?>

    <?php if ($os_version > 8) { ?>
    <li>Click the downloaded file (by default, this will be in your <b>Downloads</b> folder). This will extract the installer and open it in a window.</li>
    <?php } ?>

    <li>Double-click the iNZightVIT.<?php if ($os_version > 8) echo 'm'; ?>pkg file to launch the installer.

      <p class="note">
        Note: depending on your settings, you may get an "Unsupported Developer" warning.
        If so, simply right-click the file and select "Open", then click "Allow" in the
        pop-up window.
      </p>
    </li>

    <li>
      Follow the onscreen instructions to install iNZight.

      <?php if ($os_version > 8) { ?>
      <p class="note">
        If you already have R installed, you may have issues with the installation process. In this case,
        <a href="https://www.stat.auckland.ac.nz/~wild/iNZight/downloads/iNZightVIT-latest-osx.pkg">use the old installer</a>.
      </p>
      <?php } ?>
    </li>


  <?php } ?>

  <li>Open <b>iNZightVIT</b><?php if ($is_sl) {
      echo ". By default, this will be in your <b>Downloads</b> folder.";
    } else {
      echo " in your main Applications folder.";
    } ?>
    <!-- <p class="note">
      Note: you may wish to move this to your desktop, or somewhere else you can easily find it later.
      Simply copy and paste the entire <b>iNZightVIT</b> folder to the desired location.
      <?php if (!$is_sl) { ?>
        However, drag-and-drop won't work; instead, <b>right-click</b> the folder and select "Copy",
        then right-click the new location and select "Paste Item".
      <?php } ?>
    </p> -->
  </li>
  <?php if (!$is_sl) { ?>
    <a href="img/install/mac/open_folder.jpg" target="_blank" class="thumb">
      <img src="img/install/mac/open_folder.jpg">
    </a>
  <?php } ?>

  <?php if ($os_version > 8) { ?>

    <li>
      Disable <b>AppNap</b>,
      a power-saving feature of OS X which negatively affects the performance of iNZight.

      <p>
        To do this, simply <b>right-click</b> the <b>iNZightVIT</b> icon and click <b>Get Info</b>.
        In the window that appears, check the box next to "Prevent App Nap",
        and then close the window.
      </p>

      <?php $ext = ($os_version > 8) ? 'jpg' : 'gif'; ?>
      <a href="img/install/mac/disable_appnap.<?php echo $ext; ?>" target="_blank" class="thumb">
        <img src="img/install/mac/disable_appnap.<?php echo $ext; ?>">
      </a>

      <p class="note">
        Note: if you don't see the option to "Disable AppNap", don't worry! It just means
        you have a slightly older machine that doesn't support it.
      </p>
    </li>

  <?php }

  if ($os_version > 7) { ?>

    <li>
      <b>Allow iNZight to run</b>. Unless you have changed your security settings, you will need
        to manually allow iNZight to run the first time you use it.

      <p>
        To do this, <b>right-click</b> the <b><?php echo ($os_version > 8) ? "iNZightVIT" : "R"; ?></b> icon and click <b>Open</b>,
        and then click "Allow" in the window that pops up.
        Ignore the error message that follows.
      </p>
      <?php if ($os_version <= 8) { ?>
      <p>
        Next, do the same for "START_iNZightVIT.command". This time, iNZight
        should start. Note that in future, you can simply double-click to start iNZight.
      </p>
      <?php } ?>
      <p>
        If you wish to update iNZight, you will need to repeat the process for the <?php echo ($os_version <= 8) ? "UPDATE_iNZightVIT.command" : "Update"; ?>
        icon the first time you update iNZight.
      </p>

      <?php $ext = ($os_version > 8) ? 'jpg' : 'gif'; ?>
      <a href="img/install/mac/allow_inzight.<?php echo $ext; ?>" target="_blank" class="thumb">
        <img src="img/install/mac/allow_inzight.<?php echo $ext; ?>">
      </a>
    </li>

  <?php } else { ?>
      <li>
        Start iNZightVIT by double-clicking on "START_iNZightVIT.command".
      </li>
  <?php } ?>


</ol>
