<?php
$rel = "../../../";
if (isset($_GET["section"])) {
  $faqurl = "./";
} else {
  $faqurl = "active";
}

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
    if (isset($section["url"])) {
      header('Location: ' . $section["url"]);
    }
    if (!isset($section["sections"])) {
      $display = false;
      $file = $_GET["section"];
    } else {
      if (isset($_GET["sub"])) {
        if (array_key_exists($_GET["sub"], $section["sections"])) {
          $display = false;
          $section = $section["sections"][$_GET["sub"]];
          if (isset($section["url"])) {
            header('Location: ' . $section["url"]);
          }
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


$crumbs = array("Support" => "../", "FAQ" => "../", "Lite" => $faqurl);
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>

<div class="container">


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

<h3>
  iNZight Lite FAQ<?php
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
      If you're having trouble with iNZight Lite, this should be your first stop.
      There are some issues we know about, and offer solutions in the following pages. <br /><br />
      For issues with iNZight Desktop, go to the <a href="../">dedicated FAQ</a>.
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
          $topicSearch = '# ';
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
      ?>

    </div>

    <?php } else {
      //echo "Something went wrong ... " . $file;
      }
    ?>

  <!-- </div> -->
  <?php } ?>

  <hr>
  <div>
    <p>
      <a href="https://gitter.im/iNZightVIT/Lobby">
        <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
      </a> &mdash;
      If you're on Twitter or Github, and still can't find an answer to your problem,
      you could try our public chat.
    </p>
  </div>
</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
