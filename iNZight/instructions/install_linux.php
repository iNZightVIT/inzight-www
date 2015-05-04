<?php
  require_once('../assets/objects/setup.php');

  $dist = $_POST["dist"];
  if ($dist == "Other") { ?>

    <div class="label">iNZightVIT is not supported on other Linux distributions</div>

    <p>
      To run iNZight on Linux, you first need to install R, which is only officially
      supported on Ubuntu, Debian, Suse and RedHat.
    </p>

    <p>
      However, depending on your distribtion, you may be able to install R and the necessary
      dependencies, in which case it may be possible to get iNZight up and running.
      You will need to follow the instructions for the closest distribution listed above.
    </p>

    <p>
      If you're unable to install iNZight, there are several alternatives.
      The first is to install iNZight on a virtual machine (using something like VirtualBox),
      and running iNZight from there (we suggest Xubuntu 14.04, as iNZight looks best on this
      and installation is fairly straightforward.
      The second alternative is to use our online application,
      <a href="http://docker.stat.auckland.ac.nz/">iNZight Lite</a>.
      This runs in the browser, so no installation is necessary.
    </p>



  <?php } else { ?>

  <div class="label">Install iNZightVIT on Linux <?php echo $dist; ?>:</div>

  <p>
    I may just redirect the user to the R users installation page.
  </p>

  <?php } ?>
