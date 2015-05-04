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

<h3>Next step: Install iNZightVIT on Mac OS X 10.<?php echo $os_version; ?>: <?php echo $vname; ?></h3>

<ol>

<?php
  // We need to display the Download links for XQuartz and GTK first
  if ($is_sl) { ?>
    <li><a href="<?php echo $download_links["gtk-2.18"]; ?>">Download and install GTK+</a>.</li>

    <li>Restart your Mac (not doing so may result in iNZight crashing).</li>
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
  </li>

  <?php if ($os_version > 7) { ?>

    <li>
      The first time you run iNZight, you need to manually allow it to run.
      To do this, <b>right-click</b> the <b>R</b> icon and click <b>Open</b>,
      and then click "Allow" in the window that pops up.
      Ignore the error message that follows.
      Next, do the same for "START_iNZightVIT.command". This time, iNZight
      should start.
    </li>

  <?php } ?>





</ol>
