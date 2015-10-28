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
  <?php } else {
    $file = $file . ".Md";
    if (file_exists($file)) {
      // display the contents
      include_once($rel . 'assets/libraries/md.php');
      $Pd = new ParsedownExtra();
      $text = file_get_contents($file);

    ?>

    <div class="contents_list">
      <ul>
        <?php
          $topicSearch = '#';
          $topicPattern = preg_quote($topicSearch, '/');
          $pattern = "/^$topicPattern.*\$/m";
          if(preg_match_all($pattern, $text, $matches)){
            $matches = $matches[0];
            foreach($matches as $topic) {
              $IDpattern = "/\{#.*\}/";
              if (preg_match($IDpattern, $topic, $this_id)) {
                $this_id = $this_id[0];
                $href = substr($this_id, 1, strlen($this_id)-2);
              } else {
                $href = "#";
              }
              $topic_only = explode("{", $topic);
              $li_text = substr($topic_only[0], 1);
              echo "<li><a href='$href'>$li_text</a></li>";
            }
          }
          else{
             echo "No matches found";
          }
        ?>
      </ul>
    </div>

    <div class="markdown faq">

    <?php
      // search for Videos:
      $textArray = explode("///", $text);

      foreach($textArray as $text) {
        if (preg_match("/^VIDEO: /", $text)) {
          // remove the video text and ponk the URL down:
          echo "<div class='video-wrapper asp16x9 halfsize'>";
          echo "  <iframe width='560' height='315'";
          echo "   src='".str_replace("VIDEO: ", "", $text)."'";
          echo "   frameborder='0' allowfullscreen></iframe>";
          echo "</div>";
        } else if (preg_match("/^SCRIPT: /", $text)) {
          echo "<script src='". str_replace("SCRIPT: ", "", $text) ."'></script>";
        } else {
          echo $Pd->text($text);
        }
      }
    } else {
      echo "Something went wrong ... " . $file;
    }
  ?>

  </div>
  <?php } ?>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
