<?php
$url = "http://docker.stat.auckland.ac.nz/R/templates/newsletters/";
$rel = "../";
include_once($rel . 'assets/libraries/md.php');
$Pd = new ParsedownExtra();
$text = file_get_contents($url . "newmailer.Md");

// search for Videos:
$textArray = explode("///", $text);

$topMatter = file_get_contents("template-top.txt");
echo $topMatter;

include("template-prebody.php");

foreach($textArray as $text) {
  if (preg_match("/^VIDEO: /", $text)) {
    // remove the video text and ponk the URL down:
    echo "<div class='video-wrapper asp16x9'>";
    echo "  <iframe width='560' height='315'";
    echo "   src='".str_replace("VIDEO: ", "", $text)."'";
    echo "   frameborder='0' allowfullscreen></iframe>";
    echo "</div>";
  } else {
    echo $Pd->text($text);
  }
}

$bottomMatter = file_get_contents("template-bottom.txt");
echo $bottomMatter;

?>
