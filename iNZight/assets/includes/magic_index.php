<?php

$contents = json_decode(file_get_contents("contents.js"));

if (isset($_GET["topic"])) {
  $topic = htmlspecialchars($_GET["topic"]);
  if (!array_key_exists($topic, $contents)) {
    header("Location: ./");
  }
}

if (isset($topic)) {
  $contArr = (array) $contents;
  $curName = isset($contArr[$topic]->short) ? $contArr[$topic]->short : $contArr[$topic]->title;
  $crumbs = [$baseCrumb => "../", $contents->index->title => "./", $curName => "active"];
} else {
  $crumbs = [$baseCrumb => "../", $contents->index->title => "active"];
}
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

echo "<div class='container'>";

if (isset($topic)) {
  echo "<div class='markdown'>";

  // check Md exists:
  if (file_exists($topic.".Md")) {
    // display the contents
    include_once($rel . 'assets/libraries/md.php');
    $Pd = new ParsedownExtra();
    $text = file_get_contents($topic . ".Md");

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
      } else {
        echo $Pd->text($text);
      }
    }

//    echo $Pd->text($text);
  } else {
    echo "<h1>Sorry, this page isn't ready yet.</h1>";
  }

  echo "</div>";

  include($rel . 'assets/includes/bottom_navbar.php');
} else { ?>


<!-- <a href="../" class="small">&lt; User Guides</a> -->

<h3>iNZight User Guides: <?php echo $contents->index->title; ?></h3>

<p>
  <?php echo $contents->index->desc; ?>
</p>

<div class="contents_list">
  <div class="label">Table of Contents</div>

  <ol>
    <?php
      foreach ($contents as $url => $info) {
        if ($url == "index") {
          continue;
        }
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

</div>
<?php
}

require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
