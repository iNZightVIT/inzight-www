<?php

// this depends on the operating system
$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

// check to see if the OS and version have been specified:
$os = "";
$v = "";
if (isset($_GET['os'])) {
  $os = $_GET['os'];

  if (isset($_GET['v'])) {
    $v = $_GET['v'];
  }
}

echo "<div class='container'>";

$contents = json_decode(file_get_contents("contents.js"));
echo "<a href='./' class='small'>&lt; " . $contents->index->title . "</a>";
?>



<div class="markdown">

  <?php
  include_once($rel . 'assets/libraries/md.php');
  $Pd = new ParsedownExtra();
  $text = file_get_contents("getting_started.Md");

  echo $Pd->text($text);
  ?>
<!--
  <select id="os_select" name="os-select">
    <option value=""></option>
    <option value="windows" <?php if ($os == "win") echo 'selected'; ?>>Windows</option>
    <option value="mac" <?php if ($os == "mac") echo 'selected'; ?>>Mac</option>
    <option value="linux" <?php if ($os == "linux") echo 'selected'; ?>>Linux</option>
  </select>

  <select id="mac_select" name="mac-select"<?php if ($os == "mac") echo 'class="show"'; ?>>
    <option value=""></option>
    <option value="11" <?php if ($v == 11) echo 'selected'; ?>>El Capitan</option>
    <option value="10" <?php if ($v == 10) echo 'selected'; ?>>Yosemite</option>
    <option value="9" <?php if ($v == 9) echo 'selected'; ?>>Mavericks</option>
    <option value="8" <?php if ($v == 8) echo 'selected'; ?>>Mountain Lion</option>
    <option value="7" <?php if ($v == 7) echo 'selected'; ?>>Lion</option>
    <option value="6" <?php if ($v == 6) echo 'selected'; ?>>Snow Leopard</option>
  </select>


  <div id="startup_instructions"></div>
 -->

</div>

<?php
$topic = "getting_started.php";
include($rel . 'assets/includes/bottom_navbar.php');
?>

</div>

<script src="<?php echo $rel; ?>js/selectOSmenu.js"></script>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
