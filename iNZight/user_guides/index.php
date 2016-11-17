<?php
$rel = "../";
$crumbs = array(
  "User Guides" => "active"
);
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$subdirs = $navitems['User Guides'];
unset($subdirs["default"]);

?>

<div class="container">
  <h3>iNZight User Guides</h3>

  <p>
    Here you can find documentation and tutorials for using iNZight.
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

    <hr>
    <ul>
      <li>
        <a href="https://www.stat.auckland.ac.nz/~wild/d2i/exercises/">Data to insight Exercises</a>
        <p class="desc">
          A set of introductory Exercises for learning to use iNZight
        </p>
      </li>
    </ul>
  </div>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
