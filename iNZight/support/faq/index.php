<?php
$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
require_once($rel . 'assets/libraries/md.php');

$Pd = new ParsedownExtra();
$contents = json_decode(file_get_contents("faq.json"), true);
$sections = array_keys($contents);
$sec = false;
$display = true;

if (isset($_GET["section"])) {
  if (in_array($_GET["section"], $sections)) {
    $sec = true;
    $section = $contents[$_GET["section"]];
    if (!isset($section["sections"])) {
      $display = false;
      $file = $_GET["section"];
    } else {
      if (isset($_GET["sub"])) {
        if (array_key_exists($_GET["sub"], $section["sections"])) {
          $display = false;
          $section = $section["sections"][$_GET["sub"]];
          $file = $_GET["section"] . "_" . $_GET["sub"];
        } else {
          $contents = $section["sections"];
        }
      } else {
        $contents = $section["sections"];
      }
    }
  }
}
?>

<!-- A BACK BUTTON -->
<?php
  if ($sec) {
    if (isset($_GET["sub"])) {
      $bref = "./?section=" . $_GET["section"];
    } else {
      $bref = "./";
    }
    $btext = "Back";
  } else {
    $bref = "../";
    $btext = "Support";
  }
?>
<a href='<?php echo $bref; ?>' class='small'>&lt; <?php echo $btext; ?></a>

<h3>
  iNZight FAQ<?php
    if ($sec) {
      echo ": " . $section["title"];
    } else {
      echo " (Frequently Asked Questions)";
    }
  ?>
</h3>


<p>
  <?php
    if ($sec) {
      if (isset($section["desc"])) {
        echo $section["desc"];
      }
    } else { ?>
      If you're having trouble with iNZight, this should be your first stop.
      There are some issues we know about, and offer solutions in the following pages.
  <?php } ?>
</p>


<?php


  if ($display) { ?>
    <div class="contents_list">
      <!-- <div class="label">Table of Contents</div> -->

      <ol>
        <?php
          foreach ($contents as $key => $page) {
            echo "<li>";
            if ($sec) {
              $href = "./?section=" . $_GET["section"] . "&sub=$key";
            } else {
              $href = "./?section=$key";
            }
            echo "<a href='$href'>" . $page["title"] . "</a>";
            if (array_key_exists("desc", $page)) {
              echo "<p class='desc'>";
              echo $page["desc"];
              echo "</p>";
            }
            echo "</li>";
          }
        ?>
      </ol>
    </div>
  <?php } else { ?>

    <div class="markdown faq">

    <?php
      $file = $file . ".Md";
      if (file_exists($file)) {
        echo $Pd->text(file_get_contents($file));
      } else {
        echo "Something went wrong ... " . $file;
      }
    ?>

    </div>
  <?php } ?>




<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>