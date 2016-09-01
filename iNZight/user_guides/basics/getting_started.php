<?php

// this depends on the operating system
$rel = "../../";
$crumbs = array("User Guides" => "../", "The Basics" => "./", "Getting Started" => "active");
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
?>



<div class="markdown">

  <?php
  include_once($rel . 'assets/libraries/md.php');
  $Pd = new ParsedownExtra();
  $text = file_get_contents("getting_started.Md");

  // search for Videos:
  $textArray = explode("///", $text);

  foreach($textArray as $text) {
    if (preg_match("/^VIDEO: /", $text)) {
      // remove the video text and ponk the URL down:
      echo "<div class='embed-responsive embed-responsive-16by9'>";
      echo "  <iframe  class='embed-responsive-item'";
      echo "   src='".str_replace("VIDEO: ", "", $text)."'";
      echo "   allowfullscreen></iframe>";
      echo "</div>";
    } else if (preg_match("/^SCRIPT: /", $text)) {
      echo "<script src='". str_replace("SCRIPT: ", "", $text) ."'></script>";
    } else if (preg_match("/^HTML:/", $text)) {
      echo str_replace("HTML:", "", $text);
    } else {
      echo $Pd->text($text);
    }
  }
  ?>
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
