<?php

$rel = "../../";
$crumbs = array("User Guides" => "../", "Advanced Modules" => "active");
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$cont = json_decode(file_get_contents("contents.js"));

?>

<div class="container">
  <div class="markdown">
    <?php
      // display the contents
      include_once($rel . 'assets/libraries/md.php');
      $Pd = new ParsedownExtra();
      $text = file_get_contents("advanced_features.Md");

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


</div>

<script>
  function eqHt() {
    if ($(window).width() >= 726) {
      minHt = $(".equal-height img").eq(1).height();
      $(".equal-height img").eq(0).height(minHt).width('auto');
    } else {
      $(".equal-height img").eq(0).removeAttr("style");
    }
  }
  $(window).on("load", eqHt);
  $(window).resize(eqHt);
</script>


<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
