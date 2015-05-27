<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$subdirs = $navitems['Support'];
unset($subdirs["default"]);

?>

<h3>iNZight Support</h3>

<p>
  There are several options available to help you if you get stuck. If you haven't yet checked out the user guides,
  <a href="../user_guides/">you might find answers there</a>.
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
