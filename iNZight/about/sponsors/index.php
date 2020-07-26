<?php
$rel = "../../";
$crumbs = array("About" => "../", "Sponsors" => "active");
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>
<div class="container">
  <div class="markdown">
    <?php
      // display the contents
      include_once($rel . 'assets/libraries/md.php');
      $Pd = new ParsedownExtra();
      $text = file_get_contents("sponsors.Md");

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


<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
