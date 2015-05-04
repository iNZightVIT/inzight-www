<?php

$is_sl = $os_version == 6;
$is_ml = $os_version < 9 & !$is_sl;

// OS X version: $os_version
switch ($os_version) {
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

    <li>Double-click the downloaded file (by default, this will be in your <b>Downloads</b> folder).

      <p class="note">
        Note: depending on your settings, you may get an "Unsupported Developer" warning.
        If so, simply right-click the file and select "Open", then click "Allow" in the
        pop-up window.
      </p>
    </li>


  <?php } ?>

  <li>Open the <b>iNZightVIT</b> folder.
    <?php if ($is_sl) {
      echo "By default, this will be in your <b>Downloads</b> folder.";
    } else {
      echo "By default, this will have been installed into your <b>Applications</b> folder.";
    } ?>
    <p class="note">
      Note: you may wish to move this to your desktop, or somewhere else you can easily find it later.
      Simply copy and paste the entire <b>iNZightVIT</b> folder to the desired location.
      <?php if (!$is_sl) { ?>
        However, drag-and-drop won't work; instead, <b>right-click</b> the folder and select "Copy",
        then right-click the new location and select "Paste Item".
      <?php } ?>
    </p>
  </li>

  <?php if ($os_version > 8) { ?>

    <li>
      To ensure iNZight runs smoothly, you will need to disable <b>AppNap</b>,
      a power-saving feature of OS X which affects the performance of iNZight.

      <p>
        To do this, simply <b>right-click</b> the <b>R</b> icon and click <b>Get Info</b>.
        In the window that appears, check the box next to "Disable AppNap",
        and then close the window.
      </p>

      <p class="note">
        Note: if you don't see the option to "Disable AppNap", don't worry! It just means
        you have a slightly older machine that doesn't support it.
      </p>
    </li>

  <?php }

  if ($os_version > 7) { ?>

    <li>
      Depending on your settings, you may need to manually allow iNZight to run the first time.

      <p>
        To do this, <b>right-click</b> the <b>R</b> icon and click <b>Open</b>,
        and then click "Allow" in the window that pops up.
        Ignore the error message that follows.
      </p>
      <p>
        Next, do the same for "START_iNZightVIT.command". This time, iNZight
        should start. Note that in future, you can simply double-click to start iNZight.
      </p>
      <p>
        If you wish to update iNZight, you will need to repeat the process for the "UPDATE_iNZightVIT.command"
        icon the first time you update iNZight.
      </p>
    </li>

  <?php } ?>


</ol>
