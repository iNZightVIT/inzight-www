<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$subdirs = $navitems['Related'];
unset($subdirs["default"]);

?>

<h3>Related Projects</h3>

<p>
  Here are several projects related to iNZight, or supervised by Professor Chris Wild.
</p>


<div class="contents_list">
  <div class="label">Table of Contents</div>

  <ol>
    <?php
      foreach ($subdirs as $title => $url) {
        echo "<li>";
        echo "<a href='$url'>$title</a>";
        if (file_exists($url . "description.txt")) {
          echo "<p class='desc'>";
          include($url . "description.txt");
          echo "</p>";
        }
        echo "</li>";
      }
    ?>
  </ol>
</div>





<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
