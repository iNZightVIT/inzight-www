<?php

$contents = json_decode(file_get_contents("contents.js"));

if (isset($_GET["topic"])) {
  $topic = htmlspecialchars($_GET["topic"]);
  if (!array_key_exists($topic, $contents)) {
    header("Location: ./");
  }
}

$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');



if (isset($topic)) {
  // display the contents
  include_once($rel . 'assets/libraries/md.php');
  $Pd = new ParsedownExtra();
  $text = file_get_contents($topic . ".Md");

  echo "<div class='markdown'>";
  echo $Pd->text($text);
  echo "</div>";

} else { ?>


<h3>iNZight User Guides: The Basics</h3>

<p>
  This section will outline the very basics of iNZight. Thanks to the simplicity of
  the design, you will be exploring your data within minutes!
</p>

<div class="contents_list">
  <div class="label">Table of Contents</div>

  <ol>
    <?php
      foreach ($contents as $url => $info) {
        echo "<li>";
        // If it's a PHP page, display that, otherwise topic=X
        $inf = pathinfo($url);
        if (array_key_exists("extension", $inf)) {
          echo "<a href='$url'>$info->title</a>";
        } else {
          echo "<a href='?topic=$url'>$info->title</a>";
        }
        if (array_key_exists("desc", $info)) {
          echo "<p class='desc'>$info->desc</p>";
        }
        echo "</li>";
      }
    ?>
  </ol>
</div>





<?php
}

require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
