<?php

// included into getting_started.php
if (!isset($_REQUEST['os'])) {
  die("");
}

$os = $_REQUEST['os'];
if ($os == "") {
  die("");
}

$mac = isset($_REQUEST["v"]);
if ($mac) {
  $v = (int)$_REQUEST["v"];
  if ($v == "") {
    die("");
  }
} else {
  $v = 0;
}
?>

<h2>To start iNZight:</h2>


<?php if ($os == "win" || $os == "windows") { ?>

  Either:
  <ol class="alpha">
    <li>Double-click the iNZight icon on the desktop,</li>
    <li>OR go to the Start Menu > All Programs > iNZightVIT > iNZight</li>
    <li>OR go to where you installed iNZight (by default, this is in My documents) and double-click on the iNZight icon.</li>
  </ol>

<?php } else { ?>

  <ol>
    <?php if ($os != "linux") { ?>
    <li>
      Open the <b>iNZightVIT</b> folder.

      <p>
        <?php

          switch($os) {
            case "win":
            case "windows":
              echo "This will be wherever you extracted the zipfile to";
              break;
            case "mac":
              if ($v > 8) {
                echo "This will be in your <b>Applications</b> folder. NOTE: do not move iNZightVIT from this location!";
              } else if ($v > 6) {
                echo "By default, you'll find this in the <b>Applications</b> folder unless you moved it.";
              } else {
                echo "By default, this will be in your <b>Downloads</b> folder unless you moved it.";
              }
              break;
          }

        ?>
      </p>
    </li>

    <li>
      <?php
        if ($os == "mac" & $v > 8) {
          echo "Double-click the <b>iNZightVIT</b> icon.";
        } else {
          echo "Double-click the <b>START_iNZightVIT." . (($os == "mac") ? "command" : "bat") . "</b> icon.";
        }

        if ($os == "mac") {
          if ($v > 7) { ?>
            <p class="note">
              Note: if you get an "Unknown developper" warning, you'll need to
              <a href="../../getinzight.php?os=Mac&v=<?php echo $v; ?>&inst">
                check back on the installation instructions
              </a>
              to see how to manually allow iNZight to run the first time (see the last step).
            </p>
          <?php }
        } ?>

    </li>
    <?php }  else { ?>
      <li>
        Start R in a terminal window.
      </li>

      <li>
        Run the following code to start iNZightVIT:<br><br>
        <code>library(vit)<br>iNZightVIT()</code>
      </li>
    <?php } ?>
  </ol>
<?php } ?>



<!--
<h3>Note on Installing Modules</h3>

<p>
  Begining with iNZight 3.0, additional modules have been retained from the installation to reduce its size. If you want to use one of these modules, say, for example, Maps, you may need to run iNZight as admin <b>if you installed iNZight as admin</b>.
</p>

<p>
  If you don't run as admin, but need to, you will get a message asking if you want to use a personal library instead: this is fine, but iNZight wont be able to find the files next time you run, so it will try to install the module again.
</p>

<p>
  If you do not have admin access, but want to install a module, please ask your system administrator to <i>"run iNZight as admin, and open the module"</i>.
</p> -->
