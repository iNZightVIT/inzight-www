<?php

if (isset($_POST["v"])) {
  $v = $_POST["v"];
  $v2 = "";
} else {
  $v = $p["inzight_version"];
  $v2 = $p["inzight_version_detail_val"];
}

switch ($v) {
  case "windows":
    ?>
    <label>Which version of Windows are you using?</label>
    <input type="text" name="inzight_version_detail_val" id="inzightVersionDetailVal" maxlength="10"
           value="<?php echo $v2; ?>">
    <?php
    break;

  case "mac":
    ?>
    <label>Which version of Mac OS X are you using?</label>
    <select name="inzight_version_detail_val" id="inzightVersionDetailVal">
      <option value="">Choose ...</option>
      <option value="10" <?php if ($v2 == "10") { echo "selected"; } ?>>10.10: Yosemite</option>
      <option value="9" <?php if ($v2 == "9") { echo "selected"; } ?>>10.9: Mavericks</option>
      <option value="8" <?php if ($v2 == "8") { echo "selected"; } ?>>10.8: Mountain Lion</option>
      <option value="7" <?php if ($v2 == "7") { echo "selected"; } ?>>10.7: Lion</option>
      <option value="6" <?php if ($v2 == "6") { echo "selected"; } ?>>10:6: Snow Leopard (or earlier)</option>
    </select>
    <?php
    break;

  case "online":
    ?>
    <label>What are you using to use iNZight Lite? Specify browser if applicable.</label>
    <input type="text" name="inzight_version_detail_val" id="inzightVersionDetailVal"
           value="<?php echo $v2; ?>">
    <span class="details">e.g., "Apple iPad - Safari", "Chromebook", "Windows 7 - Firefox"</span>
    <?php
    break;

  case "ruser":
    ?>
    <label>Describe your operating system and R setup.</label>
    <input type="text" name="inzight_version_detail_val" id="inzightVersionDetailVal"
           value="<?php echo $v2; ?>">
    <span class="details">e.g., "Ubuntu 14.04, R v3.1" or "Windows 8.1, R v3.0.2"</span>
    <?php
    break;

  default:
    echo "";
}