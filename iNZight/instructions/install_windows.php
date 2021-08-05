<h4>To Install</h4>

<p>

  <ol>

    <li>
      Run the <b><?php echo $download_links["Windows"]; ?></b> file by double-clicking.
      By default this will be in <b>Downloads</b>.

      <div class="image-row">
        <img src="<?php echo $rel;?>img/install/win/install_01.png">
        <img src="<?php echo $rel;?>img/install/win/install_02.png">
      </div>

      <div class="note">
        <b>NOTE:</b>
        We don't have a Microsoft developers account for them to make iNZight a "trusted application", so you'll likely get a security warning (shown above).
        So long as the download comes from "https://inzight.nz/" or "https://r.docker.stat.auckland.ac.nz", you are fine.
      </div>
    </li>

    <li>
      <b>Follow the instructions</b> in the installer.
      We recommend you leave the install location as the default (<code>Documents\iNZightVIT</code>),
      but you can change if you prefer. Admins, see bottom of page.

      <div class="image-row">
        <img src="<?php echo $rel;?>img/install/win/install_03.png">
        <img src="<?php echo $rel;?>img/install/win/install_04.png">
      </div>


    </li>

    <li>
      <b>That's it!</b>
      iNZight has been installed on your computer. You'll find shortcuts on your Desktop,
      as well as a Start Menu folder.
      <div class="image-row">
        <img src="<?php echo $rel;?>img/install/win/install_05.png">
      </div>
    </li>
  </ol>
</p>

<hr>
<h4>Update</h4>

<p>
  <p>
    We recommend you keep iNZight up-to-date,
    as we are frequently fixing bugs and making things better.<br>
    To see whats changed, <a href="/support/changelog/?pkg=iNZight">check out the version history</a>.
  </p>

  <p>
    To update, just go to <b>Start</b> &gt; <b>iNZightVIT</b> &gt; <b>Update</b>.
  </p>
</p>

<hr>

<div class="panel panel-info space-above">
  <div class="panel-heading">
    <h4 class="panel-title">Installation Note for Admins</h4>
  </div>

  <div class="panel-body">
    <p>
      If you are an administrator installing iNZight for multiple users, simply Right-click the installer and run as admin, then install to wherever you'd like, e.g., <code>C:\Program Files (x86)</code>. Each user will get their own <b>iNZightVIT</b> folder in their Documents folder.
    </p>

    <p>
      To update, right-click "Update" in the iNZightVIT directory, wherever it was installed, to allow iNZight to update the packages.
    </p>
  </div>
</div>
